<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class GetCompositeSchedule extends CallResult
{
	public string $status;
	public ?int $connectorId;
	public ?string $scheduleStart;
	public ?object $chargingSchedule;
}
