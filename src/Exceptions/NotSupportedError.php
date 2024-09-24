<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class NotSupportedError extends OCPPError
{
    protected $code = "NotSupported";
    protected $defaultDescription = "Requested Action is not known by receiver";
}
