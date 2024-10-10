<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\Log;

class GetLog extends Call
{
	public object $log;
	public string|Log $logType;
	public int $requestId;
	public ?int $retries;
	public ?int $retryInterval;
}
