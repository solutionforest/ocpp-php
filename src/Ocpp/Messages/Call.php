<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use Ramsey\Uuid\Uuid;

abstract class Call extends Message
{
    public int $messageTypeID = 2;

    public function __construct()
    {
        if (getenv('OCPP_MESSAGE_UUID', false)) {
            $this->messageId = Uuid::uuid4()->toString();
        } else {
            $this->messageId = mt_rand(9999999, 9999999999);
        }
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
