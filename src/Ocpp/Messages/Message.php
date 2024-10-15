<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class Message
{
    public int $messageTypeID;

    public string $messageId;

    public function toArray(): array
    {
        $payload = $this->getPayload();

        return [
            'messageTypeID' => $this->messageTypeID,
            'messageId' => $this->messageId,
            'payload' => $payload,
        ];
    }

    public function getPayload(): object
    {
        $payload = (array) $this;
        $payload = array_filter($payload, function ($key) {
            return !in_array($key, ['messageTypeID', 'messageId']);
        }, ARRAY_FILTER_USE_KEY);

        return (object) $payload;
    }

}
