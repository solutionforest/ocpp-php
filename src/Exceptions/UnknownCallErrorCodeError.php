<?php

namespace SolutionForest\OcppPhp\Exceptions;

use SolutionForest\OcppPhp\Messages\CallError;

// Raised when a CALLERROR is received with unknown error code.
class UnknownCallErrorCodeError extends CallError
{
}