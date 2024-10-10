<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SignedUpdateFirmware extends Call
{
	public ?int $retries;
	public ?int $retryInterval;
	public int $requestId;
	public object $firmware;
}
