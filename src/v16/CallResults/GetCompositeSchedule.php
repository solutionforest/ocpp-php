<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class GetCompositeSchedule extends CallResult
{
	public string $status;
	public ?int $connectorId = null;
	public ?string $scheduleStart = null;
	public ?array $chargingSchedule = null;
}
