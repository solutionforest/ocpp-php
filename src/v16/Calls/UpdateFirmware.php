<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class UpdateFirmware extends Call
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
