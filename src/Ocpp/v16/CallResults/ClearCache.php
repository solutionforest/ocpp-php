<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ClearCacheStatus;

class ClearCache extends CallResult
{
	public string|ClearCacheStatus $status;
}
