<?php

namespace SolutionForest\OcppPhp\Ocpp;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\Messages\MessageTypeId;
use SolutionForest\OcppPhp\Ocpp\Messages\Send;

class JsonSchemaRegistry
{
    private $schemaDirs = ['v1.6', 'v2.0.1', 'v2.1'];

    /**
     * Create a Call, CallResult, or CallError object from a raw OCPP message array.
     *
    * For Call messages: [2, UniqueId, action, payload]
    * For CallResult messages: [3, UniqueId, payload] (requires action parameter)
    * For CallError messages: [4, UniqueId, errorCode, errorDescription, errorDetails]
    * For CallResultError messages (OCPP 2.1): [5, UniqueId, errorCode, errorDescription, errorDetails]
    * For Send messages (OCPP 2.1): [6, UniqueId, action, payload]
     *
     * @param array $message The raw OCPP message array
     * @param string $version The OCPP version (e.g., 'v1.6', 'v2.0.1', 'v2.1')
     * @param string|null $action Required for CallResult messages (the action name this is a response to)
     * @return Call|CallResult|CallError
     * @throws \Exception
     */
    public function createFromArray(array $message, string $version, ?string $action = null): Call|CallResult|CallError
    {
        return match (MessageTypeId::tryFromInt($message[0] ?? null)) {
            MessageTypeId::Call, MessageTypeId::Send => Call::fromArray($message, $version),
            MessageTypeId::CallResult => $action === null
                ? throw new \Exception("Action parameter is required for CallResult messages")
                : CallResult::fromArray($message, $action, $version),
            MessageTypeId::CallError, MessageTypeId::CallResultError => CallError::fromArray($message),
            null => throw new \Exception('Invalid message type: ' . ($message[0] ?? 'null') . '. Expected 2 (Call), 3 (CallResult), 4 (CallError), 5 (CallResultError) or 6 (Send)'),
        };
    }

    public function getSchema(Call|CallResult|array $message, string $version): array
    {
        if (is_array($message)) {
            $filename = $message['action'] ? $message['action'] . '.json' : '';
            $type = match (MessageTypeId::tryFromInt($message['messageTypeID'])) {
                MessageTypeId::Call => 'Calls',
                MessageTypeId::Send => 'Sends',
                MessageTypeId::CallResult => 'CallResults',
                default => throw new \Exception("Unvalid message type for validation: {$message['messageTypeID']}"),
            };
            return $this->loadSchema($filename, $type, $version);
        }
        $type = match (true) {
            $message instanceof Send => 'Sends',
            $message instanceof Call => 'Calls',
            default => 'CallResults',
        };
        $filename = (new \ReflectionClass($message))->getShortName() . '.json';

        return $this->loadSchema($filename, $type, $version);
    }

    public function loadSchema(string $filename, string $type, string $version = 'latest'): ?array
    {
        $callsFilenamePostfix = "Request";
        $callResponseFilenamePostfix = "Response";

        $filePath = $this->getSchemaPath($filename, $version);

        if (str_replace('.', '', $version) != "v16" && $type === 'Calls' && !str_ends_with($filename, $callsFilenamePostfix . '.json')) {
            $filename = preg_replace('/\.json$/', $callsFilenamePostfix . '.json', $filename);
            return $this->loadSchema($filename, $type, $version);
        }

        if ($type === 'CallResults' && !str_ends_with($filename, $callResponseFilenamePostfix . '.json')) {
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

    public function createCallFromArray(array $message, string $version): Call
    {
        if (MessageTypeId::tryFromInt($message[0] ?? null) !== MessageTypeId::Call) {
            throw new \Exception("Invalid message type for Call");
        }

        $action = $message[2];
        $uniqueId = $message[1];
        $payload = $message[3];

        $versionDir = str_replace('.', '', $version);
        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$versionDir}\\Calls\\{$action}";

        if (!class_exists($class)) {
            throw new \Exception("Unknown call action: {$action}");
        }

        $obj = new $class();
        $obj->uniqueId = $uniqueId;

        foreach ($payload as $key => $value) {
            if (property_exists($obj, $key)) {
                $obj->$key = $value;
            }
        }

        return $obj;
    }

    public function createCallResultFromArray(array $message, string $action, string $version): CallResult
    {
        if (MessageTypeId::tryFromInt($message[0] ?? null) !== MessageTypeId::CallResult) {
            throw new \Exception("Invalid message type for CallResult");
        }

        $uniqueId = $message[1];
        $payload = $message[2];

        $versionDir = str_replace('.', '', $version);
        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$versionDir}\\CallResults\\{$action}";

        if (!class_exists($class)) {
            throw new \Exception("Unknown call result action: {$action}");
        }

        $obj = new $class($uniqueId);

        foreach ($payload as $key => $value) {
            if (property_exists($obj, $key)) {
                $obj->$key = $value;
            }
        }

        return $obj;
    }
}
