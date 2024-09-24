<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class InternalError extends OCPPError
{
    protected $code = "InternalError";
    protected $defaultDescription = "An internal error occurred and the receiver was able to process the requested Action successfully";
}
