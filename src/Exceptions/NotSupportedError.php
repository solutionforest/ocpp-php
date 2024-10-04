<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\Messages\CallError;

class NotSupportedError extends CallError
{
    public string $errorCode = "NotSupported";
    public string $errorDescription = "Requested Action is not known by receiver";
}
