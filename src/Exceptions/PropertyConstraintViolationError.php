<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class NotImplementedError extends OCPPError
{
    protected $code = "NotImplemented";
    protected $defaultDescription = "Request Action is recognized but not supported by the receiver";
}
