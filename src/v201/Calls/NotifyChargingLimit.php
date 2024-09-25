<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyChargingLimit
{
	public ?array $chargingSchedule = null;
	public ?int $evseId = null;
	public array $chargingLimit;
}
