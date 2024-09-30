<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

class GetCompositeSchedule
{
	public string $status;
	public ?int $connectorId = null;
	public ?string $scheduleStart = null;
	public ?array $chargingSchedule = null;
}
