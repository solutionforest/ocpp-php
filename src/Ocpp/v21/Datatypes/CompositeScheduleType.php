<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingRateUnit;

class CompositeScheduleType extends Datatype
{
	public int $evseId;
	public int $duration;
	public string $scheduleStart;
	public string|ChargingRateUnit $chargingRateUnit;

	/** @var list<ChargingSchedulePeriodType> */
	#[ListOf(ChargingSchedulePeriodType::class)]
	public array $chargingSchedulePeriod;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
