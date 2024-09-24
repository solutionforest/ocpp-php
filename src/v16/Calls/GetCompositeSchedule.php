<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class GetCompositeSchedule
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit = null;
}
