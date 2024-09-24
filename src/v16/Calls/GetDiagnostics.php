<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetDiagnostics
{
	public string $location;
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public ?string $startTime = null;
	public ?string $stopTime = null;
}
