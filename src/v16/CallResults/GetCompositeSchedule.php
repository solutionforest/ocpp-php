<?php

namespace SolutionForest\OcppPhp\CallResults;

abstract class GetCompositeSchedule
{
	public string $status;
	public ?int $connectorId = null;
	public ?string $scheduleStart = null;
	public ?array $chargingSchedule = null;
}
