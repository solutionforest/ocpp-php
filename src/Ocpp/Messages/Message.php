<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use SolutionForest\OcppPhp\Ocpp\HydratesProperties;

abstract class Message
{
    // Payload values from json_decode(..., true) are hydrated into the typed
    // properties: nested objects become the generated Datatype classes.
    use HydratesProperties;

    public int $messageTypeID;

    public string $uniqueId;

    public function getPayload(): object
    {
        $payload = (array) $this;
        // Optional properties default to null; no OCPP schema allows null, so
        // null means "absent" and is left out of the payload.
        $payload = array_filter($payload, function ($value, $key) {
            return !in_array($key, ['messageTypeID', 'uniqueId']) && $value !== null;
        }, ARRAY_FILTER_USE_BOTH);

        return (object) $payload;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }
}
