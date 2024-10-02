<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

class InternalError extends CallError
{
    public string $errorCode = "InternalError";
    public string $errorDescription = "An internal error occurred and the receiver was able to process the requested Action successfully";
}
