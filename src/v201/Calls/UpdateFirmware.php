<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class UpdateFirmware
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public array $firmware;
}
