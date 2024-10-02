<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class NotifyEVChargingSchedule extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Periods contained in the charging profile are relative to this point in time.
	 */
	public string $timeBase;

	/**
	 * Charging_ Schedule
	 * urn:x-oca:ocpp:uid:2:233256
	 * Charging schedule structure defines a list of charging periods, as used in: GetCompositeSchedule.conf and ChargingProfile.
	 */
	public array $chargingSchedule;

	/**
	 * The charging schedule contained in this notification applies to an EVSE. EvseId must be > 0.
	 */
	public int $evseId;
}
