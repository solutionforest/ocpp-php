<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\ChargingRateUnit;

class GetCompositeSchedule extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Length of the requested schedule in seconds.
	 */
	public int $duration;

	/**
	 * Can be used to force a power or current profile.
	 */
	public null|string|ChargingRateUnit $chargingRateUnit;

	/**
	 * The ID of the EVSE for which the schedule is requested. When evseid=0, the Charging Station will calculate the expected consumption for the grid connection.
	 */
	public int $evseId;
}
