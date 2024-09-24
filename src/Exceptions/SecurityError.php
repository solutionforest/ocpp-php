<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class SecurityError extends OCPPError
{
    protected $code = "SecurityError";
    protected $defaultDescription = "During the processing of Action a security issue occurred preventing receiver from completing the Action successfully";
}
