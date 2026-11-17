<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\FirmwareStatus;

class FirmwareStatusNotification extends Call
{
	public string|FirmwareStatus $status;
}
