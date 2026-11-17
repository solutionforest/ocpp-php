<?php

namespace SolutionForest\OcppPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\InterfaceType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use Nette\PhpGenerator\Literal;
use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\Messages\Send;

abstract class SchemaProcessor
{
    public string $basepath;

    public string $version;

    public string $baseNamespace = "SolutionForest\OcppPhp\Ocpp\\";

    public const SUPPORTED_VERSIONS = ['v16', 'v201', 'v21'];

    /**
     * Names for enums that schemas define inline on a property, instead of as a named
     * "...EnumType" definition. The core OCPP 1.6 schemas define all their enums this way;
     * the names come from OCPP 1.6 edition 2, chapter 7 "Types". OCPP 2.x has none.
     *
     * Keys, most specific first: "Schema:path", then the path or any trailing part of it,
     * e.g. "idTagInfo.status" also matches SendLocalList's "localAuthorizationList.idTagInfo.status".
     * Path segments are property names; array items are traversed implicitly.
     * Every inline enum must resolve, or generation fails.
     */
    public const INLINE_ENUMS = [
        'v16' => [
            // Field names that mean the same type in every schema.
            'idTagInfo.status' => 'AuthorizationStatus',
            'chargingProfilePurpose' => 'ChargingProfilePurposeType',
            'chargingProfileKind' => 'ChargingProfileKindType',
            'recurrencyKind' => 'RecurrencyKindType',
            'chargingRateUnit' => 'ChargingRateUnitType',
            'context' => 'ReadingContext',
            'format' => 'ValueFormat',
            'measurand' => 'Measurand',
            'phase' => 'Phase',
            'location' => 'Location',
            'unit' => 'UnitOfMeasure',
            'errorCode' => 'ChargePointErrorCode',
            'reason' => 'Reason',
            'requestedMessage' => 'MessageTrigger',
            'updateType' => 'UpdateType',

            // "type" and "status" mean a different type per message.
            'ChangeAvailability:type' => 'AvailabilityType',
            'Reset:type' => 'ResetType',
            'BootNotificationResponse:status' => 'RegistrationStatus',
            'CancelReservationResponse:status' => 'CancelReservationStatus',
            'ChangeAvailabilityResponse:status' => 'AvailabilityStatus',
            'ChangeConfigurationResponse:status' => 'ConfigurationStatus',
            'ClearCacheResponse:status' => 'ClearCacheStatus',
            'ClearChargingProfileResponse:status' => 'ClearChargingProfileStatus',
            'DataTransferResponse:status' => 'DataTransferStatus',
            'DiagnosticsStatusNotification:status' => 'DiagnosticsStatus',
            'FirmwareStatusNotification:status' => 'FirmwareStatus',
            'GetCompositeScheduleResponse:status' => 'GetCompositeScheduleStatus',
            'RemoteStartTransactionResponse:status' => 'RemoteStartStopStatus',
            'RemoteStopTransactionResponse:status' => 'RemoteStartStopStatus',
            'ReserveNowResponse:status' => 'ReservationStatus',
            'ResetResponse:status' => 'ResetStatus',
            'SendLocalListResponse:status' => 'UpdateStatus',
            'SetChargingProfileResponse:status' => 'ChargingProfileStatus',
            'StatusNotification:status' => 'ChargePointStatus',
            'TriggerMessageResponse:status' => 'TriggerMessageStatus',
            'UnlockConnectorResponse:status' => 'UnlockStatus',
        ],
    ];

    /**
     * Names for objects that schemas define inline instead of as a named definition (core
     * OCPP 1.6 only), generated as Datatypes. Names from OCPP 1.6 edition 2, chapter 7 "Types".
     * Same key format as INLINE_ENUMS. Every inline object must resolve, or generation fails.
     */
    public const INLINE_OBJECTS = [
        'v16' => [
            'idTagInfo' => 'IdTagInfo',
            'chargingProfile' => 'ChargingProfile',
            'csChargingProfiles' => 'ChargingProfile',
            'chargingSchedule' => 'ChargingSchedule',
            'chargingSchedulePeriod' => 'ChargingSchedulePeriod',
            'configurationKey' => 'KeyValue',
            'localAuthorizationList' => 'AuthorizationData',
            'meterValue' => 'MeterValue',
            'transactionData' => 'MeterValue',
            'sampledValue' => 'SampledValue',
        ],
    ];

    /**
     * Find every inline enum in a message schema (definitions are not walked: OCPP schemas
     * only use named "...EnumType" definitions there).
     *
     * @return list<array{path: string, values: list<string>, enum: ?string}>
     */
    public static function findInlineEnums(string $version, string $schemaName, array $schema): array
    {
        $found = [];

        self::walkProperties($schema, function (array $node, string $path) use (&$found, $version, $schemaName): void {
            if (is_array($node['enum'] ?? null)) {
                $found[] = [
                    'path' => $path,
                    'values' => $node['enum'],
                    'enum' => self::resolveInlineEnum($version, $schemaName, $path),
                ];
            }
        });

        return $found;
    }

    /**
     * Find every inline object (an object with properties, not a $ref) in a message schema.
     *
     * @return list<array{path: string, node: array, name: ?string}>
     */
    public static function findInlineObjects(string $version, string $schemaName, array $schema): array
    {
        $found = [];

        self::walkProperties($schema, function (array $node, string $path) use (&$found, $version, $schemaName): void {
            if (isset($node['properties'])) {
                $found[] = [
                    'path' => $path,
                    'node' => $node,
                    'name' => self::resolveInline(self::INLINE_OBJECTS[$version] ?? [], $schemaName, $path),
                ];
            }
        });

        return $found;
    }

    /**
     * Visit every property node below the schema root, depth first.
     * Path segments are property names; array items are traversed implicitly.
     *
     * @param callable(array, string): void $visit
     */
    private static function walkProperties(array $schema, callable $visit): void
    {
        $walk = function (array $node, string $path) use (&$walk, $visit): void {
            if ($path !== '') {
                $visit($node, $path);
            }

            foreach ($node['properties'] ?? [] as $name => $property) {
                if (is_array($property)) {
                    $walk($property, $path === '' ? $name : "{$path}.{$name}");
                }
            }

            if (is_array($node['items'] ?? null)) {
                $walk($node['items'], $path);
            }
        };

        $walk($schema, '');
    }

    public static function resolveInlineEnum(string $version, string $schemaName, string $path): ?string
    {
        return self::resolveInline(self::INLINE_ENUMS[$version] ?? [], $schemaName, $path);
    }

    /**
     * @param array<string, string> $map
     */
    private static function resolveInline(array $map, string $schemaName, string $path): ?string
    {
        if (isset($map["{$schemaName}:{$path}"])) {
            return $map["{$schemaName}:{$path}"];
        }

        $segments = explode('.', $path);
        while ($segments !== []) {
            $key = implode('.', $segments);
            if (isset($map[$key])) {
                return $map[$key];
            }
            array_shift($segments);
        }

        return null;
    }

    public function __construct(?string $version = null)
    {
        if ($version !== null) {
            $this->setVersion($version);
        }
    }

    public function main(): void
    {
        $this->readVersion();
        $schemas = glob(__DIR__ . $this->basepath . "/Schemas/*.json");

        foreach ($schemas as $schema) {
            $classes = $this->parseSchema($schema);
            $this->processClasses($classes);
        }
    }

    protected function readVersion(): void
    {
        if (isset($this->version)) {
            return;
        }

        echo "Select version (" . implode('/', self::SUPPORTED_VERSIONS) . "): ";
        $this->setVersion(trim((string) fgets(STDIN)));
    }

    public function setVersion(string $version): void
    {
        if (!in_array($version, self::SUPPORTED_VERSIONS, true)) {
            echo "Invalid version selected. Exiting.\n";
            exit(1);
        }

        $this->basepath = "/../Ocpp/" . $version;
        $this->version = $version;
    }


    protected function generateDataClass(ClassType|EnumType|InterfaceType $class, string $filepath): void
    {
        $subnamespace = ucfirst($filepath);
        $namespace = new PhpNamespace($this->baseNamespace  . $this->version . '\\' . $subnamespace);

        if ($class instanceof ClassType) {
            $namespace = $this->handleUseStatements($namespace, $class);
        }

        $filename = $class->getName();
        $printer = new Printer;
        $printer->setTypeResolving(false);
        $class = $printer->printClass($class, $namespace);
        $namespace = $printer->printNamespace($namespace);

        echo "Creating {$filename} in {$subnamespace}\n";

        $directory = __DIR__ . "{$this->basepath}/{$filepath}";
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        file_put_contents("{$directory}/{$filename}.php", "<?php\n\n{$namespace}{$class}");
    }

    protected function getNameFromSchema(string $schemaPath): string
    {
        $title = basename($schemaPath, '.json');
        // $name = null;
        // if (isset($schemaData['$id'])) {
        //     $idParts = explode(':', $schemaData['$id']);
        //     if (!empty($idParts)) {
        //         $name = str_replace(['.req', '.conf'], '', end($idParts));
        //     }
        // }
        // $title = $name ?? $schemaData['title'];
        $title = preg_replace("/[^a-zA-Z0-9]+/", "", $title);
        return $title;
    }

    /**
     * @param string|null $schemaName Schema file name (e.g. "ResetResponse"), used to resolve
     *                                inline enums and inline objects (core OCPP 1.6).
     * @param string      $pathPrefix Property path of this object inside the schema ('' at the root).
     */
    protected function mapPropertiesToClass(array $propertyArray, string $className, array $schemaContent, ?string $schemaName = null, string $pathPrefix = ''): ClassType
    {
        $class = new ClassType($className);

        foreach ($propertyArray["properties"] as $property => $definition) {
            $required = isset($propertyArray["required"]) && in_array($property, $propertyArray["required"]);
            $path = $pathPrefix === '' ? $property : "{$pathPrefix}.{$property}";
            $resolved = $this->resolvePropertyType($definition, $schemaContent, $schemaName, $path);

            if ($resolved['datatype'] !== null) {
                $phpType = ($required ? '' : '?') . $resolved['datatype'];
            } elseif ($resolved['enum'] !== null) {
                $phpType = ($required ? '' : 'null|') . 'string|' . $resolved['enum'];
            } else {
                $phpType = $this->mapSchemaTypeToPhp($resolved['type'], $required);
            }

            $classProperty = $class->addProperty($property)
                ->setType($phpType)
                ->addComment(html_entity_decode($resolved['description']));

            if ($resolved['listOf'] !== null) {
                // Resolved to a short name and documented by handleUseStatements().
                $classProperty->addAttribute(ListOf::class, [new Literal($resolved['listOf'] . '::class')]);
            }

            // Optional properties default to null, so reading an absent field returns null
            // instead of throwing "must not be accessed before initialization".
            // Required properties stay uninitialized until set.
            if (!$required && $phpType !== null) {
                $classProperty->setValue(null);
            }
        }

        return $class;
    }

    /**
     * @return array{type: ?string, enum: ?string, datatype: ?string, listOf: ?string, description: string}
     *         type: JSON schema type; enum/datatype/listOf: fully qualified class names.
     */
    private function resolvePropertyType(array $definition, array $schemaContent, ?string $schemaName, string $path): array
    {
        $resolved = ['type' => null, 'enum' => null, 'datatype' => null, 'listOf' => null, 'description' => ''];

        if (isset($definition['$ref'])) {
            $ref = $this->refName($definition['$ref']);
            $target = $schemaContent['definitions'][$ref] ?? [];
            $resolved['type'] = $target['type'] ?? null;
            $resolved['description'] = $target['description'] ?? '';

            if (str_contains($ref, 'EnumType')) {
                $resolved['enum'] = $this->classIn('Enums', str_replace('EnumType', '', $ref));
            } elseif ($this->isDatatypeDefinition($ref, $target)) {
                $resolved['datatype'] = $this->classIn('Datatypes', $ref);
            }

            return $resolved;
        }

        if (!isset($definition['type'])) {
            $resolved['type'] = 'any';

            return $resolved;
        }

        $resolved['type'] = $definition['type'];
        $resolved['description'] = $definition['description'] ?? '';

        if ($definition['type'] === 'array' && is_array($definition['items'] ?? null)) {
            $items = $definition['items'];
            if (isset($items['$ref'])) {
                $ref = $this->refName($items['$ref']);
                if ($this->isDatatypeDefinition($ref, $schemaContent['definitions'][$ref] ?? [])) {
                    $resolved['listOf'] = $this->classIn('Datatypes', $ref);
                }
            } elseif (isset($items['properties'])) {
                $resolved['listOf'] = $this->classIn('Datatypes', $this->inlineObjectName($schemaName, $path));
            }
        } elseif (isset($definition['properties'])) {
            $resolved['datatype'] = $this->classIn('Datatypes', $this->inlineObjectName($schemaName, $path));
        } elseif ($schemaName !== null && isset($definition['enum'])) {
            // Inline enum (core OCPP 1.6): typed with the named enum, like a $ref EnumType.
            $inlineEnum = self::resolveInlineEnum($this->version, $schemaName, $path);
            if ($inlineEnum !== null) {
                $resolved['enum'] = $this->classIn('Enums', $inlineEnum);
            }
        }

        return $resolved;
    }

    /**
     * A definition generated as a Datatype class: an object with properties.
     * CustomDataType stays a free-form object (it allows additional properties).
     */
    protected function isDatatypeDefinition(string $name, array $definition): bool
    {
        return !str_contains($name, 'EnumType')
            && $name !== 'CustomDataType'
            && isset($definition['properties']);
    }

    private function inlineObjectName(?string $schemaName, string $path): string
    {
        $name = $schemaName === null
            ? null
            : self::resolveInline(self::INLINE_OBJECTS[$this->version] ?? [], $schemaName, $path);

        if ($name === null) {
            throw new \RuntimeException(
                "Unmapped inline object {$schemaName}:{$path} in {$this->version}. "
                . "Add its name to SchemaProcessor::INLINE_OBJECTS."
            );
        }

        return $name;
    }

    private function refName(string $ref): string
    {
        $parts = explode('/', $ref);

        return end($parts);
    }

    private function classIn(string $subnamespace, string $name): string
    {
        return $this->baseNamespace . $this->version . '\\' . $subnamespace . '\\' . $name;
    }

    /**
     * Replace fully qualified class names in property types and #[ListOf] attributes with
     * imported short names. An import that would clash with the class itself or another
     * import gets a suffix (e.g. class Reset using enum Reset imports it as ResetEnum).
     */
    protected function handleUseStatements(PhpNamespace $namespace, ClassType $class): PhpNamespace
    {
        $aliases = [];
        $import = function (string $fqcn) use ($namespace, $class, &$aliases): string {
            $position = strrpos($fqcn, '\\');
            $short = substr($fqcn, $position + 1);

            if (substr($fqcn, 0, $position) === $namespace->getName()) {
                return $short;
            }
            if (isset($aliases[$fqcn])) {
                return $aliases[$fqcn];
            }

            $alias = $short;
            if ($alias === $class->getName() || in_array($alias, $aliases, true)) {
                $alias .= str_contains($fqcn, '\\Enums\\') ? 'Enum' : 'Datatype';
            }

            $namespace->addUse($fqcn, $alias);

            return $aliases[$fqcn] = $alias;
        };

        foreach ($class->getProperties() as $property) {
            $type = (string) $property->getType();
            if (str_contains($type, '\\')) {
                $parts = array_map(
                    static fn (string $part): string => str_contains($part, '\\') ? $import($part) : $part,
                    explode('|', $type),
                );
                $property->setType(implode('|', $parts));
            }

            foreach ($property->getAttributes() as $attribute) {
                if ($attribute->getName() !== ListOf::class) {
                    continue;
                }

                $itemClass = $import(substr((string) $attribute->getArguments()[0], 0, -strlen('::class')));
                $property->setAttributes([]);
                $property->addAttribute($import(ListOf::class), [new Literal($itemClass . '::class')]);
                $property->addComment("@var list<{$itemClass}>" . ($property->isNullable() ? '|null' : ''));
            }
        }

        $parents = [
            'Call' => Call::class,
            'CallResult' => CallResult::class,
            'Send' => Send::class,
            'Datatype' => Datatype::class,
        ];
        if (isset($parents[$class->getExtends()])) {
            $namespace->addUse($parents[$class->getExtends()]);
        }

        return $namespace;
    }

    protected function mapSchemaTypeToPhp(?string $type, bool $required)
    {
        if (!$type) {
            return null;
        }

        $map = [
            "object" => "object",
            "array" => "array",
            "integer" => "int",
            "string" => "string",
            "number" => "float",
            "boolean" => "bool",
            "any" => "mixed",
        ];

        $type = strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $type));
        $type = $map[$type] ?? 'mixed';
        $type = $required ? $type : "?" . $type;
        return $type;
    }

    abstract protected function processClasses(array $classes): void;

    abstract protected function parseSchema(string $schema): array;
}
