<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyEVChargingNeeds extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Contains the maximum schedule tuples the car supports per schedule.
	 */
	public ?int $maxScheduleTuples;

	/**
	 * Charging_ Needs
	 * urn:x-oca:ocpp:uid:2:233249
	 */
	public object $chargingNeeds;

	/**
	 * Defines the EVSE and connector to which the EV is connected. EvseId may not be 0.
	 */
	public int $evseId;
}
