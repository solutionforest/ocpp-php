<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargingRateUnitType;

class GetCompositeSchedule extends Call
{
	public int $connectorId;
	public int $duration;
	public null|string|ChargingRateUnitType $chargingRateUnit = null;
}
