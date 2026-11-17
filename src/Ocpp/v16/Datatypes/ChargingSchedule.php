<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargingRateUnitType;

class ChargingSchedule extends Datatype
{
	public ?int $duration = null;
	public ?string $startSchedule = null;
	public string|ChargingRateUnitType $chargingRateUnit;

	/** @var list<ChargingSchedulePeriod> */
	#[ListOf(ChargingSchedulePeriod::class)]
	public array $chargingSchedulePeriod;
	public ?float $minChargingRate = null;
}
