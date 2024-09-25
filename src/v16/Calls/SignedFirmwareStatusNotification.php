<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SignedFirmwareStatusNotification
{
	public string $status;
	public ?int $requestId = null;
}
