<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\ChargingLimitType;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\ChargingScheduleType;

class NotifyChargingLimit extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<ChargingScheduleType>|null */
	#[ListOf(ChargingScheduleType::class)]
	public ?array $chargingSchedule = null;

	/**
	 * The charging schedule contained in this notification applies to an EVSE. evseId must be > 0.
	 */
	public ?int $evseId = null;

	/**
	 * Charging_ Limit
	 * urn:x-enexis:ecdm:uid:2:234489
	 */
	public ChargingLimitType $chargingLimit;
}
