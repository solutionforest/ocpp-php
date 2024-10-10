<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class GetCompositeSchedule extends Call
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit;
}
