<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class SignedUpdateFirmware extends Call
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public array $firmware;
}
