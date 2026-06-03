<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

class PropertyConstraintViolationError extends CallError
{
    public string $errorCode = "PropertyConstraintViolation";
    public string $errorDescription = "Payload for Action is syntactically correct but at least one of the fields violates property constraints";
}
