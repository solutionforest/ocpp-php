<?php

namespace SolutionForest\OcppPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

/**
 * Generates a Datatype class for every nested object type:
 * - each named object definition (OCPP 2.x and the 1.6 security extension),
 * - each inline object of the core OCPP 1.6 schemas, under its spec name (INLINE_OBJECTS).
 */
class SchemaToDatatypes extends SchemaProcessor
{
    protected function processClasses(array $classes): void
    {
        foreach ($classes as $class) {
            $class->setExtends('Datatype');
            $this->generateDataClass($class, 'Datatypes');
        }
    }

    protected function parseSchema(string $schema): array
    {
        $schemaContent = json_decode(file_get_contents($schema), true);
        $schemaName = $this->getNameFromSchema($schema);

        $datatypes = [];

        foreach ($schemaContent['definitions'] ?? [] as $name => $definition) {
            if ($this->isDatatypeDefinition($name, $definition)) {
                $datatypes[] = $this->mapPropertiesToClass($definition, $name, $schemaContent);
            }
        }

        foreach (self::findInlineObjects($this->version, $schemaName, $schemaContent) as $inline) {
            if ($inline['name'] === null) {
                throw new \RuntimeException(
                    "Unmapped inline object {$schemaName}:{$inline['path']} in {$this->version}. "
                    . "Add its name to SchemaProcessor::INLINE_OBJECTS."
                );
            }

            $datatypes[] = $this->mapPropertiesToClass($inline['node'], $inline['name'], $schemaContent, $schemaName, $inline['path']);
        }

        return $datatypes;
    }
}
