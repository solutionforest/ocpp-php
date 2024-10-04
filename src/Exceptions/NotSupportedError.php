<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

class NotSupportedError extends CallError
{
    public string $errorCode = "NotSupported";
    public string $errorDescription = "Requested Action is not known by receiver";
}
