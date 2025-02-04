<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

/**
 *   Not strict OCPP 1.6 - see OccurenceConstraintViolationError
 *   Not valid OCPP 2.0.1
 *  Valid in OCPP 2.1
 **/

class OccurrenceConstraintViolationError extends CallError
{
    public string $errorCode = "OccurrenceConstraintViolation";
    public string $errorDescription = "Payload for Action is syntactically correct but at least one of the fields violates occurence constraints";
}
