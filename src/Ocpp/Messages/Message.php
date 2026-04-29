<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class Message
{
    public int $messageTypeID;

    public string $uniqueId;

    public function getPayload(): object
    {
        $payload = (array) $this;
        $payload = array_filter($payload, function ($key) {
            return !in_array($key, ['messageTypeID', 'uniqueId']);
        }, ARRAY_FILTER_USE_KEY);

        return (object) $payload;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }
}
