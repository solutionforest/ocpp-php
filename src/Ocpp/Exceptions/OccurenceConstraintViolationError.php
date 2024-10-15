<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

/**
 *  To allow for strict OCPP 1.6 compliance
 *  ocpp-j-1.6-errata-sheet.pdf
 *      5. Known issues that will not be fixed
 *      5.1. Page 14, par 4.2.3: CallError: Typo in enum
 *      Typo in enum: OccurenceConstraintViolation
 *  Valid in 2.0.1
 **/

class OccurenceConstraintViolationError extends CallError
{
    public string $errorCode = "OccurenceConstraintViolation";
    public string $errorDescription = "Payload for Action is syntactically correct but at least one of the fields violates occurence constraints";
}
