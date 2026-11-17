<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

/**
 * OCPP 2.1 SEND message: [6, UniqueId, action, payload].
 *
 * An unconfirmed, one-way message. The receiver does not reply with a
 * CALLRESULT or CALLERROR (e.g. NotifyPeriodicEventStream).
 *
 * Extends Call so it shares payload handling and schema lookup (the schema
 * lives alongside the Call schemas, without a Request/Response suffix).
 */
abstract class Send extends Call
{
    public int $messageTypeID = MessageTypeId::Send->value;
}
