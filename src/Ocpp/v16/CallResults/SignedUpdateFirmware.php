<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\UpdateFirmwareStatus;

class SignedUpdateFirmware extends CallResult
{
	public string|UpdateFirmwareStatus $status;
}
