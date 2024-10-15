<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

class GenericError extends CallError
{
    public string $errorCode = "GenericError";
    public string $errorDescription = "Any other error not all other OCPP defined errors";
}
