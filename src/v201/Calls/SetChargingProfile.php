<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class SetChargingProfile
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * For TxDefaultProfile an evseId=0 applies the profile to each individual evse. For ChargingStationMaxProfile and ChargingStationExternalConstraints an evseId=0 contains an overal limit for the whole Charging Station.
	 */
	public int $evseId;

	/**
	 * Charging_ Profile
	 * urn:x-oca:ocpp:uid:2:233255
	 * A ChargingProfile consists of ChargingSchedule, describing the amount of power or current that can be delivered per time interval.
	 */
	public array $chargingProfile;
}
