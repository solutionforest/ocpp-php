<?php

namespace SolutionForest\OcppPhp\Scripts;

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
        $schemaName = $title;

        $call = false;
        $callResult = false;
        $send = false;
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
            // OCPP 1.6 requests have no suffix. From OCPP 2.x, a schema without
            // Request/Response suffix is a one-way SEND message (e.g. NotifyPeriodicEventStream).
            $send = $this->version !== 'v16';
        }

        if (!isset($schemaContent["properties"])) {
            $class = new ClassType($title);
        } else {
            $class = $this->mapPropertiesToClass($schemaContent, $title, $schemaContent, $schemaName);
        }

        $class->setExtends($send ? 'Send' : ($call ? 'Call' : 'CallResult'));

        if ($call) {
            $calls[] = $class;
        } elseif ($callResult) {
            $callResults[] = $class;
        }

        return ['calls' => $calls, 'callResults' => $callResults];
    }
}
