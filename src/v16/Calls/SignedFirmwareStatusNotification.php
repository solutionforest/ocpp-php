<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v16\Enums\FirmwareStatus;

class SignedFirmwareStatusNotification extends Call
{
	public string|FirmwareStatus $status;
	public ?int $requestId = null;
}
