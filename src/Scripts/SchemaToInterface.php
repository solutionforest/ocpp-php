<?php

namespace SolutionForest\OcppPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\InterfaceType;

class SchemaToInterface extends SchemaProcessor
{
    public InterfaceType $interface;

    public function main(): void
    {
        $this->readVersion();
        $schemas = glob(__DIR__ . $this->basepath . "/Schemas/*.json");

        $this->interface = new InterfaceType('OcppServiceInterface');
        foreach ($schemas as $schema) {
            $classes = $this->parseSchema($schema);
            $this->processClasses($classes);
        }
        $this->generateDataClass($this->interface, 'Interfaces');
    }



    protected function processClasses(array $classes): void
    {
        foreach ($classes as $class) {
            echo "Processing {$class}\n";
            $this->interface->addMethod('handle' . $class)->setStatic()
                ->setPublic()
                ->setReturnType('array')
                ->addParameter('message')->setType('array');
        }
    }

    protected function parseSchema(string $schema): array
    {
        $title = $this->getNameFromSchema($schema);

        if (substr($title, -7) === "Request") {
            $call = true;
            $title = substr($title, 0, -7);
        } elseif (substr($title, -8) === "Response") {
            $call = false;
            $title = substr($title, 0, -8);
        } else {
            $call = true;
        }


        return $call ? [$title] : [];
    }
}
