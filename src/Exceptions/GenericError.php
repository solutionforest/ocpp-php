<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class GenericError extends OCPPError
{
    protected $code = "GenericError";
    protected $defaultDescription = "Any other error not all other OCPP defined errors";
}
