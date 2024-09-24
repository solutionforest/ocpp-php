<?php

namespace SolutionForest\OcppPhp\Scripts;

require __DIR__ . '/../../vendor/autoload.php';

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;

abstract class SchemaProcessor
{
    public string $basepath = "../v16";

    public function main(): void
    {
        $schemas = glob($this->basepath . "/Schemas/*.json");

        foreach ($schemas as $schema) {
            $classes = $this->parseSchema($schema);
            $this->processClasses($classes);
        }
    }


    protected function generateDataClass(ClassType $class, string $filepath): void
    {
        $subnamespace = ucfirst($filepath);
        $namespace = new PhpNamespace("SolutionForest\OcppPhp\\" . $subnamespace);
        $filename = $class->getName();
        $printer = new Printer;
        $class = $printer->printClass($class, $namespace);
        $namespace = $printer->printNamespace($namespace);

        file_put_contents("{$this->basepath}/{$filepath}/{$filename}.php", "<?php\n\n{$namespace}{$class}");
    }

    abstract protected function processClasses(array $classes): void;

    abstract protected function parseSchema(string $schema): array;
}
