<?php

namespace SolutionForest\OcppPhp\Ocpp;

use React\Socket\ConnectionInterface;
use SolutionForest\OcppPhp\Ocpp\Messages;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

interface ChargePoint
{
    /**
     * Send a Call message to the client and return the payload of the response.
     *
     * @param ConnectionInterface $connection The connection interface.
     * @param Messages\Call $message The Call message to send.
     * @param bool $suppress Whether to suppress CallError response errors. When set to false, an exception will be raised for users to handle the CallError.
     * @param string|null $uniqueId An optional unique ID for the call.
     * @param bool $skipSchemaValidation Whether to skip schema validation.
     * @return array|Messages\CallResult The payload of the response.
     */
    public function call(ConnectionInterface $connection, Call $message, bool $suppress = true, ?string $uniqueId = null, bool $skipSchemaValidation = false): array|CallResult;

    
}
