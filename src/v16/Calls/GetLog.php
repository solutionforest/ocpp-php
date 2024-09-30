<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class GetLog
{
	public array $log;
	public string|\SolutionForest\OocpPhp\v16\Enums\Log $logType;
	public int $requestId;
	public ?int $retries = null;
	public ?int $retryInterval = null;
}
