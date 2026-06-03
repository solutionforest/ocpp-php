<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class Message
{
    public int $messageTypeID;

    public string $uniqueId;

    /**
     * Set a payload property value, coercing types when necessary.
     *
     * When json_decode is used with $assoc=true, JSON objects become PHP arrays.
     * This method uses reflection to detect when a property is typed as `object`
     * or `?object` and casts the array value to stdClass before assignment,
     * preventing TypeError on PHP 8.2+.
     */
    protected function setPayloadProperty(string $key, mixed $value): void
    {
        if (!property_exists($this, $key)) {
            return;
        }

        // If the value is an array and the property is typed as object/?object, cast it.
        if (is_array($value)) {
            $reflection = new \ReflectionProperty($this, $key);
            $type = $reflection->getType();

            if ($type instanceof \ReflectionNamedType && $type->getName() === 'object') {
                $value = (object) $value;
            }
        }

        $this->$key = $value;
    }

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
