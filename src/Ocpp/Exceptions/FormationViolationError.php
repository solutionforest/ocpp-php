<?php

namespace SolutionForest\OcppPhp\Ocpp\Exceptions;

use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

/**
 *  To allow for strict OCPP 1.6 compliance
 *     5. Known issues that will not be fixed
 *     5.2. Page 14, par 4.2.3. CallError: incorrect name in enum: FormationViolation
 *     Incorrect name in enum: FormationViolation
 */
class FormationViolationError extends CallError
{
    public string $errorCode = "FormationViolation";
    public string $errorDescription = "Payload for Action is syntactically incorrect or structure for Action";
}
