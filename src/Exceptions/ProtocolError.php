<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

class ProtocolError extends CallError
{
    public string $errorCode = "ProtocolError";
    public string $errorDescription = "Payload for Action is incomplete";
}
