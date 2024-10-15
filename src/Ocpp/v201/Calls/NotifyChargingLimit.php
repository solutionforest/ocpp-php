<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyChargingLimit extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;
	public ?array $chargingSchedule;

	/**
	 * The charging schedule contained in this notification applies to an EVSE. evseId must be > 0.
	 */
	public ?int $evseId;

	/**
	 * Charging_ Limit
	 * urn:x-enexis:ecdm:uid:2:234489
	 */
	public object $chargingLimit;
}
