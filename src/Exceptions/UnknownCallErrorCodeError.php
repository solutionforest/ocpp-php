<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\Messages\CallError;

// Raised when a CALLERROR is received with unknown error code.
class UnknownCallErrorCodeError extends CallError
{
}