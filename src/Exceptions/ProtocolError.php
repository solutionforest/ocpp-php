<?php

namespace SolutionForest\OocpPhp\Exceptions;

use SolutionForest\OocpPhp\CallError;

class ProtocolError extends CallError
{
    public string $errorCode = "ProtocolError";
    public string $errorDescription = "Payload for Action is incomplete";
}
