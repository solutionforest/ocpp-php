<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\ChargingSchedule;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\GetCompositeScheduleStatus;

class GetCompositeSchedule extends CallResult
{
	public string|GetCompositeScheduleStatus $status;
	public ?int $connectorId = null;
	public ?string $scheduleStart = null;
	public ?ChargingSchedule $chargingSchedule = null;
}
