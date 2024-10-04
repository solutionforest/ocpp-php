<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

class SecurityError extends CallError
{
    public string $errorCode = "SecurityError";
    public string $errorDescription = "During the processing of Action a security issue occurred preventing receiver from completing the Action successfully";
}
