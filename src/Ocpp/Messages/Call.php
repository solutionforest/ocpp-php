<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use Ramsey\Uuid\Uuid;

abstract class Call extends Message
{
    public int $messageTypeID = 2;

    public function __construct(?array $payload = null)
    {
        if (getenv('OCPP_MESSAGE_UUID', false)) {
            $this->messageId = Uuid::uuid4()->toString();
        } else {
            $this->messageId = mt_rand(9999999, 9999999999);
        }

        if ($payload !== null) {
            foreach ($payload as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    /**
     * Create a Call object from a raw OCPP message array.
     * 
     * @param array $message The raw OCPP message [messageTypeID, messageId, action, payload]
     * @param string $version The OCPP version (e.g., 'v1.6', 'v2.0.1')
     * @return static
     * @throws \Exception
     */
    public static function fromArray(array $message, string $version): static
    {
        if ($message[0] !== 2) {
            throw new \Exception("Invalid message type for Call, expected 2 got {$message[0]}");
        }

        $action = $message[2];
        $messageId = $message[1];
        $payload = $message[3] ?? [];

        $versionDir = str_replace('.', '', $version);
        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$versionDir}\\Calls\\{$action}";

        if (!class_exists($class)) {
            throw new \Exception("Unknown call action: {$action}");
        }

        $obj = new $class($payload);
        $obj->messageId = $messageId;

        return $obj;
    }

    public function toArray(): array
    {
        $payload = $this->getPayload();
        $action = (new \ReflectionClass($this))->getShortName();

        return [
            $this->messageTypeID,
            $this->messageId,
            $action,
            $payload,
        ];
    }
}
