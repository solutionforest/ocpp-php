<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class UpdateFirmware
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
