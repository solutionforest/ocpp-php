<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

/**
 * ValidationError should be raised if validation a message payload fails.
 *
 * Note this isn't an official OCPP error!
 */
class ValidationError extends CallError
{
}
