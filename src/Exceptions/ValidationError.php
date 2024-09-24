<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

/**
 * ValidationError should be raised if validation a message payload fails.
 *
 * Note this isn't an official OCPP error!
 */
class ValidationError extends OCPPError
{
}
