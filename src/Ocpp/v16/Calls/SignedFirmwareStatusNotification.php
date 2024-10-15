<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\FirmwareStatus;

class SignedFirmwareStatusNotification extends Call
{
	public string|FirmwareStatus $status;
	public ?int $requestId;
}
