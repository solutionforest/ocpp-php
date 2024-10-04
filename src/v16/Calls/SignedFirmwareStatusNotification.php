<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\FirmwareStatus;

class SignedFirmwareStatusNotification extends Call
{
	public string|FirmwareStatus $status;
	public ?int $requestId = null;
}
