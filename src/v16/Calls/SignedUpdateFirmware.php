<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SignedUpdateFirmware
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public array $firmware;
}
