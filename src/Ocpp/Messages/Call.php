<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use Ramsey\Uuid\Uuid;

abstract class Call extends Message
{
    public int $messageTypeID = 2;

    public function __construct()
    {
        $this->messageId = Uuid::uuid4()->toString();
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
