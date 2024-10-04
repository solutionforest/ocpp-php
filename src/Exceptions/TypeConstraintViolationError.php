<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\Messages\CallError;

class TypeConstraintViolationError extends CallError
{
    public string $errorCode = "TypeConstraintViolation";
    public string $errorDescription = "Payload for Action is syntactically correct but at least one of the fields violates data type constraints (e.g. “somestring”: 12)";
}
