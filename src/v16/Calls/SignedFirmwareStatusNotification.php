<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class SignedFirmwareStatusNotification
{
	public string|\SolutionForest\OocpPhp\v16\Enums\FirmwareStatus $status;
	public ?int $requestId = null;
}
