<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

class NotImplementedError extends CallError
{
    public string $errorCode = "NotImplemented";
    public string $errorDescription = "Request Action is recognized but not supported by the receiver";
}
