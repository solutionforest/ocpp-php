<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class UpdateFirmware
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
