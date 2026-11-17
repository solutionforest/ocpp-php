<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingLimitType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingScheduleType;

class NotifyChargingLimit extends Call
{
	/** @var list<ChargingScheduleType>|null */
	#[ListOf(ChargingScheduleType::class)]
	public ?array $chargingSchedule = null;

	/**
	 * The EVSE to which the charging limit is set. If absent or when zero, it applies to the entire Charging Station.
	 */
	public ?int $evseId = null;
	public ChargingLimitType $chargingLimit;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
