<?php

namespace SolutionForest\OocpPhp\Scripts;

require_once __DIR__ . "/../../vendor/autoload.php";

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\EnumType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Printer;

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
        $filename = $class->getName();
        $printer = new Printer;
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

    abstract protected function processClasses(array $classes): void;

    abstract protected function parseSchema(string $schema): array;
}
