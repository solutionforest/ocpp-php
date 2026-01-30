<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class CallResult extends Message
{
    public int $messageTypeID = 3;

    public function __construct(string $messageId, ?array $payload = null)
    {
        $this->messageId = $messageId;

        if ($payload !== null) {
            foreach ($payload as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    /**
     * Create a CallResult object from a raw OCPP message array.
     * 
     * @param array $message The raw OCPP message [messageTypeID, messageId, payload]
     * @param string $action The action name this is a response to
     * @param string $version The OCPP version (e.g., 'v1.6', 'v2.0.1')
     * @return static
     * @throws \Exception
     */
    public static function fromArray(array $message, string $action, string $version): static
    {
        if ($message[0] !== 3) {
            throw new \Exception("Invalid message type for CallResult, expected 3 got {$message[0]}");
        }

        $messageId = $message[1];
        $payload = $message[2] ?? [];

        $versionDir = str_replace('.', '', $version);
        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$versionDir}\\CallResults\\{$action}";

        if (!class_exists($class)) {
            throw new \Exception("Unknown call result action: {$action}");
        }

        return new $class($messageId, $payload);
    }
    
    public function toArray(): array
    {
        $payload = $this->getPayload();

        return [
            $this->messageTypeID,
            $this->messageId,
            $payload,
        ];
    }

}
