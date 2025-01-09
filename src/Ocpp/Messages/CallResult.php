<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class CallResult extends Message
{
    public int $messageTypeID = 3;

    public function __construct(string $messageId)
    {
        $this->messageId = $messageId;
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
