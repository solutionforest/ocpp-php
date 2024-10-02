<?php

namespace SolutionForest\OocpPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;
use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\CallResult;

abstract class SchemaProcessor
{
    public string $basepath;

    public string $version;

    public string $baseNamespace = "SolutionForest\OocpPhp\\";

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
        echo "Select version (v16/v201): ";
        $handle = fopen("php://stdin", "r");
        $version = trim(fgets($handle));
        fclose($handle);

        if (!in_array($version, ['v16', 'v201'])) {
            echo "Invalid version selected. Exiting.\n";
            exit(1);
        }

        $this->basepath = "/../" . $version;
        $this->version = $version;
    }


    protected function generateDataClass(ClassType|EnumType $class, string $filepath): void
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

        file_put_contents(__DIR__ . "{$this->basepath}/{$filepath}/{$filename}.php", "<?php\n\n{$namespace}{$class}");
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

    protected function mapPropertiesToClass(array $propertyArray, string $className, array $schemaContent): ClassType
    {
        $class = new ClassType($className);
        // $class->setAbstract();

        foreach ($propertyArray["properties"] as $property => $definition) {
            $enumName = null;

            $required = isset($propertyArray["required"]) && in_array($property, $propertyArray["required"]);
            $description = "";

            // get property type from ref or type
            if (isset($definition["\$ref"])) {
                $ref = explode("/", $definition["\$ref"]);
                $ref = end($ref);

                $type = $schemaContent["definitions"][$ref]["type"] ?? null;
                $description = $schemaContent["definitions"][$ref]["description"] ?? "";

                if (str_contains($ref, "EnumType")) {
                    $enumName = str_replace('EnumType', '', $ref);
                    $enumName = $this->baseNamespace . $this->version . "\Enums\\" . $enumName;
                    // $enumName = "Enums\\" . $enumName;
                }
            } elseif (isset($definition["type"])) {
                $type = $definition["type"];
                $description = $definition["description"] ?? "";
            } else {
                $type = "any";
            }

            $type =  $this->mapSchemaTypeToPhp($type, $enumName || $required);
            $enumPropertyType =  ($required ? '' : 'null|') . ($type ? $type . '|' : '') . $enumName;

            $class->addProperty($property)
                ->setType($enumName ? $enumPropertyType : $type)
                ->setInitialized(!$required)->addComment(html_entity_decode($description));
        }

        return $class;
    }

    protected function handleUseStatements(PhpNamespace $namespace, ClassType $class): PhpNamespace
    {
        // Map Enums to use statements
        foreach ($class->getProperties() as $property) {
            if (str_contains($property->getType(), 'Enums')) {
                $types = explode('|', $property->getType());
                foreach ($types as $key => $type) {
                    if (str_contains($type, 'Enums')) {
                        $namespace->addUse($type);
                        $types[$key] = substr(strrchr($type, "\\"), 1);
                    } else {
                        $types[$key] = $type;
                    }
                }
                $class->getProperty($property->getName())->setType(implode('|', $types));
            }
        }

        // Add use statements for Call and CallResult
        if ($class->getExtends() === 'Call') {
            $namespace->addUse(Call::class);
        } elseif ($class->getExtends() === 'CallResult') {
            $namespace->addUse(CallResult::class);
        }

        return $namespace;
    }

    protected function mapSchemaTypeToPhp(?string $type, bool $required)
    {
        if (!$type) {
            return null;
        }

        $map = [
            "object" => "array",
            "array" => "array",
            "integer" => "int",
            "string" => "string",
            "number" => "int",
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
