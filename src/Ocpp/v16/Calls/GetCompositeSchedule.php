<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class GetCompositeSchedule extends Call
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit;
}
