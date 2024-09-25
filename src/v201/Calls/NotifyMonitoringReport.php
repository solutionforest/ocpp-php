<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyMonitoringReport
{
	public ?array $monitor = null;
	public int $requestId;
	public ?bool $tbc = null;
	public int $seqNo;
	public string $generatedAt;
}
