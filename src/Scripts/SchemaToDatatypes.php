<?php

namespace SolutionForest\OocpPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Type;

class SchemaToDatatypes extends SchemaProcessor
{
    protected function processClasses(array $classes): void
    {
        foreach ($classes ?? [] as $class) {
            $this->generateDataClass($class, 'Datatypes');
        }
    }

    protected function parseSchema(string $schema): array
    {
        $schemaContent = json_decode(file_get_contents($schema), true);

        if (!isset($schemaContent["definitions"])) {
            return [];
        }

        $datatypes = [];


        foreach ($schemaContent["definitions"] as $name => $definition) {

            if (str_contains($name, "EnumType") || str_contains($name, "CustomDataType")) {
                continue;
            }

            $class = $this->mapPropertiesToClass($definition, $name, $schemaContent);

            $datatypes[] = $class;
        }

        return $datatypes;
    }
}
