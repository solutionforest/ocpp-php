<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class SignedUpdateFirmware
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public array $firmware;
}
