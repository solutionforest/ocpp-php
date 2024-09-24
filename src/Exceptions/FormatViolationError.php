<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

/**
 * Not strict OCPP 1.6 - see FormationViolationError
 * Valid OCPP 2.0.1
 */
class FormatViolationError extends OCPPError
{
    protected $code = "FormatViolation";
    protected $defaultDescription = "Payload for Action is syntactically incorrect or \" \" structure for Action";
}
