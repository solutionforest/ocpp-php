<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class RemoteStopTransaction extends CallResult
{
	public string $status;
}
