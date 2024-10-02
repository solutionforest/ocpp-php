<?php

namespace SolutionForest\OocpPhp;

abstract class Message
{
    public int $messageTypeID;

    public string $messageId;

    public function toArray(): array
    {
        $payload = (array) $this;
        $payload = array_filter($payload, function ($key) {
            return !in_array($key, ['messageTypeID', 'messageId']);
        }, ARRAY_FILTER_USE_KEY);

        return [
            'messageTypeID' => $this->messageTypeID,
            'messageId' => $this->messageId,
            'payload' => (object) $payload,
        ];
    }
}
