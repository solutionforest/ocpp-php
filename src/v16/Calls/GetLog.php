<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetLog
{
	public array $log;
	public string $logType;
	public int $requestId;
	public ?int $retries = null;
	public ?int $retryInterval = null;
}
