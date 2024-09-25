<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class FirmwareStatusNotification
{
	public string $status;
	public ?int $requestId = null;
}
