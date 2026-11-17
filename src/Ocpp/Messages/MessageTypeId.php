<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

/**
 * OCPP-J message type identifiers (first element of every message array).
 * Defined by the transport layer, not the schemas, so shared by all OCPP versions.
 */
enum MessageTypeId: int
{
    case Call = 2;
    case CallResult = 3;
    case CallError = 4;
    /** OCPP 2.1+ */
    case CallResultError = 5;
    /** OCPP 2.1+ */
    case Send = 6;

    /**
     * Strict lookup: only an actual int matches (the string "2" does not).
     */
    public static function tryFromInt(mixed $value): ?self
    {
        return is_int($value) ? self::tryFrom($value) : null;
    }
}
