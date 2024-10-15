<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

class InternalError extends CallError
{
    public string $errorCode = "InternalError";
    public string $errorDescription = "An internal error occurred and the receiver was able to process the requested Action successfully";
}
