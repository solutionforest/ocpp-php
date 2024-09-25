<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetLog
{
	public string $status;
	public ?array $statusInfo = null;
	public ?string $filename = null;
}
