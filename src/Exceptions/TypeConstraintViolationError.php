<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class TypeConstraintViolationError extends OCPPError
{
    protected $code = "TypeConstraintViolation";
    protected $defaultDescription = "Payload for Action is syntactically correct but at least one of the fields violates data type constraints (e.g. “somestring”: 12)";
}
