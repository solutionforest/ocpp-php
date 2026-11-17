<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingProfileType;

class SetChargingProfile extends Call
{
	/**
	 * For TxDefaultProfile an evseId=0 applies the profile to each individual evse. For ChargingStationMaxProfile and ChargingStationExternalConstraints an evseId=0 contains an overal limit for the whole Charging Station.
	 */
	public int $evseId;

	/**
	 * A ChargingProfile consists of 1 to 3 ChargingSchedules with a list of ChargingSchedulePeriods, describing the amount of power or current that can be delivered per time interval.
	 *
	 * image::images/ChargingProfile-Simple.png[]
	 */
	public ChargingProfileType $chargingProfile;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
