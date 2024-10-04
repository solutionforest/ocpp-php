<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SignedUpdateFirmware extends Call
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public array $firmware;
}
