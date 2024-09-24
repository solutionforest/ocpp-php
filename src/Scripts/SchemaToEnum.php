<?php

namespace SolutionForest\OcppPhp\Scripts;

require __DIR__ . '/../../vendor/autoload.php';

use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;

$converter = new SchemaToEnum();
$converter->main();

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


        $name = null;
        if (isset($schemaData['$id'])) {
            $idParts = explode(':', $schemaData['$id']);
            if (!empty($idParts)) {
                $name = str_replace(['.req', '.conf'], '', end($idParts));
            }
        }
        $title = $name ?? $schemaData['title'];

        $definitions = isset($schemaData['definitions']) ? $schemaData['definitions'] : [];

        foreach ($definitions as $enumType => $value) {
            if (str_contains($enumType, 'Enum')) {
                $typeName = str_replace('Enum', '', $enumType);
                if (!in_array($typeName, array_keys($this->existingEnums))) {
                    $enum = new EnumType($typeName);

                    $enum->addComment("Values of the {$typeName} field of a value in {$title}.");

                    foreach ($value['enum'] as $enumAttr) {
                        $enum->addCase($enumAttr);
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
