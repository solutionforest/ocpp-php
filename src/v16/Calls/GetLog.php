<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v16\Enums\Log;

class GetLog extends Call
{
	public array $log;
	public string|Log $logType;
	public int $requestId;
	public ?int $retries = null;
	public ?int $retryInterval = null;
}
