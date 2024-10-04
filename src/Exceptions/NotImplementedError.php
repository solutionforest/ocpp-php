<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

class NotImplementedError extends CallError
{
    public string $errorCode = "NotImplemented";
    public string $errorDescription = "Request Action is recognized but not supported by the receiver";
}
