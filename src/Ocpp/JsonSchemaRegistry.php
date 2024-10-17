<?php

namespace SolutionForest\OcppPhp\Ocpp;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class JsonSchemaRegistry
{
    private $schemaDirs = ['v1.6', 'v2.0.1'];

    public function getSchema(Call|CallResult|array $message, string $version): array
    {
        if (is_array($message)) {
            $filename = $message['action'] ? $message['action'] . '.json' : '';
            $type = $message['messageTypeID'];
            switch ($type) {
                case 2:
                    $type = 'Calls';
                    break;
                case 3:
                    $type = 'CallResults';
                    break;
                default:
                    throw new \Exception("Unvalid message type for validation: {$type}");
            }
            return $this->loadSchema($filename, $type, $version);
        }
        $type = $message instanceof Call ? 'Calls' : 'CallResults';
        $filename = (new \ReflectionClass($message))->getShortName() . '.json';

        return $this->loadSchema($filename, $type, $version);
    }

    public function loadSchema(string $filename, string $type, string $version = 'latest'): ?array
    {
        $callsFilenamePostfix = "Request";
        $callResponseFilenamePostfix = "Response";

        $filePath = $this->getSchemaPath($filename, $version);

        if (str_replace('.', '', $version) != "v16" && $type === 'Calls' && !str_contains($filename, $callsFilenamePostfix)) {
            $filename = preg_replace('/\.json$/', $callsFilenamePostfix . '.json', $filename);
            return $this->loadSchema($filename, $type, $version);
        }

        if ($type === 'CallResults' && !str_contains($filename, $callResponseFilenamePostfix)) {
            $filename = preg_replace('/\.json$/', $callResponseFilenamePostfix . '.json', $filename);
            return $this->loadSchema($filename, $type, $version);
        }

        if ($filePath !== null && file_exists($filePath)) {
            return $this->loadSchemaFromFile($filePath);
        }

        throw new \Exception("Schema not found: {$filename} in version {$version}");
    }

    private function getSchemaPath(string $filename, string $version): ?string
    {
        if ($version === 'latest') {
            $version = $this->findLatestVersion();
        }

        $version = str_replace('.', '', $version);

        return __DIR__ . '/' . $version . '/Schemas/' . $filename;
    }

    public function findLatestVersion(): ?string
    {
        //Simple version comparison (assumes numeric versioning like v1, v2, etc.)
        usort($this->schemaDirs, function ($a, $b) {
            return strnatcmp(basename($a), basename($b));
        });
        return end($this->schemaDirs);
    }

    private function loadSchemaFromFile(string $filePath): ?array
    {
        $jsonData = file_get_contents($filePath);
        if ($jsonData === false) {
            return null; // Or throw an exception
        }
        $schema = json_decode($jsonData, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return null; // Or throw an exception
        }
        return $schema;
    }
}
