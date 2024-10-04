<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\Log;

class GetLog extends Call
{
	public array $log;
	public string|Log $logType;
	public int $requestId;
	public ?int $retries = null;
	public ?int $retryInterval = null;
}
