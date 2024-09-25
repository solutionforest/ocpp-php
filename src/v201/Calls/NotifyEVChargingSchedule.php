<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyEVChargingSchedule
{
	public string $timeBase;
	public array $chargingSchedule;
	public int $evseId;
}
