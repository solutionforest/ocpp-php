<?php

namespace SolutionForest\OocpPhp\Exceptions;

use OCPPError;

class ProtocolError extends OCPPError
{
    protected $code = "ProtocolError";
    protected $defaultDescription = "Payload for Action is incomplete";
}
