<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyEVChargingNeeds
{
	public ?int $maxScheduleTuples = null;
	public array $chargingNeeds;
	public int $evseId;
}
