<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

/**
 * Not strict OCPP 1.6 - see FormationViolationError
 * Valid OCPP 2.0.1
 */
class FormatViolationError extends CallError
{
    public string $errorCode = "FormatViolation";
    public string $errorDescription = "Payload for Action is syntactically incorrect or \" \" structure for Action";
}
