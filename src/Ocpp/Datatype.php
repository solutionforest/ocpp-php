<?php

namespace SolutionForest\OcppPhp\Ocpp;

/**
 * Base class of the generated Datatypes (nested objects of OCPP messages).
 *
 * Construct from decoded JSON or named values; nested Datatypes are hydrated recursively.
 * Serializes to its set properties only: unset optional properties (null) are omitted,
 * since no OCPP schema allows null.
 */
abstract class Datatype implements \JsonSerializable
{
    use HydratesProperties;

    public function __construct(?array $data = null)
    {
        $this->fill($data);
    }

    public function jsonSerialize(): object
    {
        return (object) array_filter(
            get_object_vars($this),
            static fn (mixed $value): bool => $value !== null,
        );
    }
}
