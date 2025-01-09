<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class Message
{
    public int $messageTypeID;

    public string $messageId;

    public function getPayload(): object
    {
        $payload = (array) $this;
        $payload = array_filter($payload, function ($key) {
            return !in_array($key, ['messageTypeID', 'messageId']);
        }, ARRAY_FILTER_USE_KEY);

        return (object) $payload;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }
}
