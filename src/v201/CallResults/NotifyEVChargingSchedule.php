<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class NotifyEVChargingSchedule
{
	public string $status;
	public ?array $statusInfo = null;
}
