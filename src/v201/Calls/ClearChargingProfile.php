<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ClearChargingProfile extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The Id of the charging profile to clear.
	 */
	public ?int $chargingProfileId;

	/**
	 * Charging_ Profile
	 * urn:x-oca:ocpp:uid:2:233255
	 * A ChargingProfile consists of a ChargingSchedule, describing the amount of power or current that can be delivered per time interval.
	 */
	public ?object $chargingProfileCriteria;
}
