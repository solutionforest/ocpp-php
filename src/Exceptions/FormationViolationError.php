<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

/**
 *  To allow for strict OCPP 1.6 compliance
 *     5. Known issues that will not be fixed
 *     5.2. Page 14, par 4.2.3. CallError: incorrect name in enum: FormationViolation
 *     Incorrect name in enum: FormationViolation
 */
class FormationViolationError extends OCPPError
{
    protected $code = "FormationViolation";
    protected $defaultDescription = "Payload for Action is syntactically incorrect or structure for Action";
}
