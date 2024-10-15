<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SignedUpdateFirmware extends Call
{
	public ?int $retries;
	public ?int $retryInterval;
	public int $requestId;
	public object $firmware;
}
