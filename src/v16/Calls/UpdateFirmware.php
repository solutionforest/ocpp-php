<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class UpdateFirmware
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
