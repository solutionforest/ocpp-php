<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\RemoteStartStopStatus;

class RemoteStopTransaction extends CallResult
{
	public string|RemoteStartStopStatus $status;
}
