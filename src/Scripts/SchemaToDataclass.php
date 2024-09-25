<?php

namespace SolutionForest\OocpPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;

class SchemaToDataclass extends SchemaProcessor
{
    protected function processClasses(array $classes): void
    {
        foreach ($classes['calls'] ?? [] as $class) {
            $this->generateDataClass($class, 'Calls');
        }

        foreach ($classes['callResults'] ?? [] as $class) {
            $this->generateDataClass($class, 'CallResults');
        }
    }

    protected function parseSchema(string $schema): array
    {
        $schemaContent = json_decode(file_get_contents($schema), true);

        $title = $this->getNameFromSchema($schema);

        $call = false;
        $callResult = false;
        $calls = [];
        $callResults = [];

        if (substr($title, -7) === "Request") {
            $call = true;
            $title = substr($title, 0, -7);
        } elseif (substr($title, -8) === "Response") {
            $callResult = true;
            $title = substr($title, 0, -8);
        } else {
            $call = true;
        }

        $class = new ClassType($title);
        $class->setAbstract();

        if (!isset($schemaContent["properties"])) {
            if ($call) {
                $calls[] = $class;
            } elseif ($callResult) {
                $callResults[] = $class;
            }
            return ['calls' => $calls, 'callResults' => $callResults];
        }

        foreach ($schemaContent["properties"] as $property => $definition) {
            // if ($property === "customData") {
            //     $class->addProperty($property)->setType('mixed')->setInitialized();
            //     continue;
            // }

            $required = isset($schemaContent["required"]) && in_array($property, $schemaContent["required"]);
            $description = "";

            if (isset($definition["type"])) {
                $type = $definition["type"];
                $description = $definition["description"] ?? "";
            } else {
                if (isset($definition["\$ref"])) {
                    $ref = explode("/", $definition["\$ref"]);
                    $ref = end($ref);
                    $type = $schemaContent["definitions"][$ref]["type"];
                    $description = $schemaContent["definitions"][$ref]["description"] ?? "";
                } else {
                    $type = "any";
                }
            }

            $type = $this->mapSchemaTypeToPhp($type, $required);
            $class->addProperty($property)->setType($type)->setInitialized(!$required)->addComment(html_entity_decode($description));
        }

        if ($call) {
            $calls[] = $class;
        } elseif ($callResult) {
            $callResults[] = $class;
        }

        return ['calls' => $calls, 'callResults' => $callResults];
    }


    function mapSchemaTypeToPhp(string $type, bool $required)
    {
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
}
