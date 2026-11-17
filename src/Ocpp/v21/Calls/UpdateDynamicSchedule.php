<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingScheduleUpdateType;

class UpdateDynamicSchedule extends Call
{
	/**
	 * Id of charging profile to update.
	 */
	public int $chargingProfileId;

	/**
	 * Updates to a ChargingSchedulePeriodType for dynamic charging profiles.
	 */
	public ChargingScheduleUpdateType $scheduleUpdate;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
