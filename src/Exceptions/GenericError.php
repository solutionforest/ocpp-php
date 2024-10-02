<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

class GenericError extends CallError
{
    public string $errorCode = "GenericError";
    public string $errorDescription = "Any other error not all other OCPP defined errors";
}
