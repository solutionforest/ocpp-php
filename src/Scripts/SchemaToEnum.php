<?php

namespace SolutionForest\OcppPhp\Scripts;

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

        $title = $this->getNameFromSchema($schema);

        foreach ($schemaData['definitions'] ?? [] as $enumType => $value) {
            if (str_contains($enumType, 'EnumType')) {
                $typeName = str_replace('EnumType', '', $enumType);
                if (!in_array($typeName, array_keys($this->existingEnums))) {
                    $enum = new EnumType($typeName);

                    $enum->addComment("Values of the {$typeName} field of a value in {$title}.");
                    $this->mergeCases($enum, $value['enum']);

                    $this->existingEnums[$typeName] = $enum;
                } else {
                    echo "Enum {$typeName} already exists\n";

                    $enum = $this->existingEnums[$typeName];
                    $comment = substr($enum->getComment(), 0, -1);
                    $enum->setComment($comment . " , {$title}.");

                    // Schemas may define the same enum with different values: keep the union.
                    $this->mergeCases($enum, $value['enum']);
                }
            }
        }

        // Inline enums (core OCPP 1.6): named via SchemaProcessor::INLINE_ENUMS, values merged.
        foreach (self::findInlineEnums($this->version, $title, $schemaData) as $inline) {
            $typeName = $inline['enum'];
            $values = $inline['values'];

            if ($typeName === null) {
                throw new \RuntimeException(
                    "Unmapped inline enum {$title}:{$inline['path']} in {$this->version}. "
                    . "Add its name to SchemaProcessor::INLINE_ENUMS."
                );
            }

            if (!isset($this->existingEnums[$typeName])) {
                $this->existingEnums[$typeName] = (new EnumType($typeName))
                    ->addComment("Values of the {$typeName} field of a value in {$title}.");
            } else {
                $enum = $this->existingEnums[$typeName];
                $comment = substr($enum->getComment(), 0, -1);
                // A schema may use the same enum on several properties; list it once.
                if (!preg_match('/(in | , )' . preg_quote($title, '/') . '( ,|$)/', $comment)) {
                    $enum->setComment($comment . " , {$title}.");
                }
            }

            $this->mergeCases($this->existingEnums[$typeName], $values);
        }

        return $this->existingEnums;
    }

    /**
     * @param list<string> $values
     */
    private function mergeCases(EnumType $enum, array $values): void
    {
        foreach ($values as $enumAttr) {
            $enumAttrTitle = preg_replace("/[^a-zA-Z0-9]+/", "", $enumAttr);
            if (!isset($enum->getCases()[$enumAttrTitle])) {
                $enum->addCase($enumAttrTitle, $enumAttr);
            }
        }
    }
}
