<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetCompositeSchedule
{
	public int $duration;
	public ?string $chargingRateUnit = null;
	public int $evseId;
}
