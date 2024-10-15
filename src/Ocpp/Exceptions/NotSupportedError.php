<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

class NotSupportedError extends CallError
{
    public string $errorCode = "NotSupported";
    public string $errorDescription = "Requested Action is not known by receiver";
}
