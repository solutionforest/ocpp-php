<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

class GenericError extends CallError
{
    public string $errorCode = "GenericError";
    public string $errorDescription = "Any other error not all other OCPP defined errors";
}
