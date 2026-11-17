<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class UpdateFirmware extends Call
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
