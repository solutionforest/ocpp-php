<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class GetCompositeSchedule extends Call
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit = null;
}
