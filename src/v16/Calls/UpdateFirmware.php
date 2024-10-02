<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class UpdateFirmware extends Call
{
	public string $location;
	public ?int $retries = null;
	public string $retrieveDate;
	public ?int $retryInterval = null;
}
