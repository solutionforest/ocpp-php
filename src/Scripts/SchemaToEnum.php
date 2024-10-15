<?php

namespace SolutionForest\OcppPhp\Ocpp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\EnumType;

class SchemaToEnum extends SchemaProcessor
{
    protected array $existingEnums = [];

    protected function processClasses(array $classes): void
    {
        foreach ($classes ?? [] as $class) {
            $this->generateDataClass($class, 'Enums');
        }
    }

    protected function parseSchema(string $schema): array
    {
        $schemaContent = file_get_contents($schema);
        $schemaData = json_decode($schemaContent, true);

        if (!isset($schemaData['definitions'])) {
            return [];
        }

        $title = $this->getNameFromSchema($schema);

        $definitions = isset($schemaData['definitions']) ? $schemaData['definitions'] : [];

        foreach ($definitions as $enumType => $value) {
            if (str_contains($enumType, 'EnumType')) {
                $typeName = str_replace('EnumType', '', $enumType);
                if (!in_array($typeName, array_keys($this->existingEnums))) {
                    $enum = new EnumType($typeName);

                    $enum->addComment("Values of the {$typeName} field of a value in {$title}.");

                    foreach ($value['enum'] as $enumAttr) {
                        $enumAttrTitle = preg_replace("/[^a-zA-Z0-9]+/", "", $enumAttr);
                        $enum->addCase($enumAttrTitle, $enumAttr);
                    }

                    $this->existingEnums[$typeName] = $enum;
                } else {
                    echo "Enum {$typeName} already exists\n";

                    $enum = $this->existingEnums[$typeName];
                    $comment = substr($enum->getComment(), 0, -1);
                    $enum->setComment($comment . " , {$title}.");
                }
            }
        }

        return $this->existingEnums;
    }
}
