<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class GetCompositeSchedule
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit = null;
}
