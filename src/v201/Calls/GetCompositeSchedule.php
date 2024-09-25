<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetCompositeSchedule
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Length of the requested schedule in seconds.
	 */
	public int $duration;

	/**
	 * Can be used to force a power or current profile.
	 */
	public ?string $chargingRateUnit = null;

	/**
	 * The ID of the EVSE for which the schedule is requested. When evseid=0, the Charging Station will calculate the expected consumption for the grid connection.
	 */
	public int $evseId;
}
