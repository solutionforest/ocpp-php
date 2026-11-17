<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ClearChargingProfileStatus;

class ClearChargingProfile extends CallResult
{
	public string|ClearChargingProfileStatus $status;
}
