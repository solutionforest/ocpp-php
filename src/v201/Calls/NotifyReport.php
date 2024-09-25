<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyReport
{
	public int $requestId;
	public string $generatedAt;
	public ?array $reportData = null;
	public ?bool $tbc = null;
	public int $seqNo;
}
