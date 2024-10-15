<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

class ProtocolError extends CallError
{
    public string $errorCode = "ProtocolError";
    public string $errorDescription = "Payload for Action is incomplete";
}
