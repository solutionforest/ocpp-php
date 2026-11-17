<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use Ramsey\Uuid\Uuid;

abstract class Call extends Message
{
    public int $messageTypeID = MessageTypeId::Call->value;

    public function __construct(?array $payload = null)
    {
        if (getenv('OCPP_MESSAGE_UUID', false)) {
            $this->uniqueId = Uuid::uuid4()->toString();
        } else {
            $this->uniqueId = (string) mt_rand(9999999, 9999999999);
        }

        if ($payload !== null) {
            foreach ($payload as $key => $value) {
                $this->setPayloadProperty($key, $value);
            }
        }
    }

    /**
     * Create a Call object from a raw OCPP message array.
     *
     * Also accepts OCPP 2.1 SEND messages (messageTypeID 6), which resolve to a Send subclass.
     *
     * @param array $message The raw OCPP message [messageTypeID, UniqueId, action, payload]
     * @param string $version The OCPP version (e.g., 'v1.6', 'v2.0.1', 'v2.1')
     * @return static
     * @throws \Exception
     */
    public static function fromArray(array $message, string $version): static
    {
        $type = MessageTypeId::tryFromInt($message[0] ?? null);

        if (!in_array($type, [MessageTypeId::Call, MessageTypeId::Send], true)) {
            throw new \Exception('Invalid message type for Call, expected 2 or 6 got ' . ($message[0] ?? 'null'));
        }

        $action = $message[2];
        $uniqueId = $message[1];
        $payload = $message[3] ?? [];

        $versionDir = str_replace('.', '', $version);
        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$versionDir}\\Calls\\{$action}";

        if (!class_exists($class)) {
            throw new \Exception("Unknown call action: {$action}");
        }

        if ($type === MessageTypeId::Send && !is_subclass_of($class, Send::class)) {
            throw new \Exception("Action {$action} cannot be sent as a SEND message");
        }

        $obj = new $class($payload);
        $obj->uniqueId = $uniqueId;

        return $obj;
    }

    public function toArray(): array
    {
        $payload = $this->getPayload();
        $action = (new \ReflectionClass($this))->getShortName();

        return [
            $this->messageTypeID,
            $this->uniqueId,
            $action,
            $payload,
        ];
    }
}
