<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

use SolutionForest\OcppPhp\v201\Enums\ChargingRateUnit;

class ChargingScheduleType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Identifies the ChargingSchedule.
	 */
	public int $id;

	/**
	 * Charging_ Schedule. Start_ Schedule. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569237
	 * Starting point of an absolute schedule. If absent the schedule will be relative to start of charging.
	 */
	public ?string $startSchedule = null;

	/**
	 * Charging_ Schedule. Duration. Elapsed_ Time
	 * urn:x-oca:ocpp:uid:1:569236
	 * Duration of the charging schedule in seconds. If the duration is left empty, the last period will continue indefinitely or until end of the transaction if chargingProfilePurpose = TxProfile.
	 */
	public ?int $duration = null;

	/**
	 * Charging_ Schedule. Charging_ Rate_ Unit. Charging_ Rate_ Unit_ Code
	 * urn:x-oca:ocpp:uid:1:569238
	 * The unit of measure Limit is expressed in.
	 */
	public string|ChargingRateUnit $chargingRateUnit;
	public array $chargingSchedulePeriod;

	/**
	 * Charging_ Schedule. Min_ Charging_ Rate. Numeric
	 * urn:x-oca:ocpp:uid:1:569239
	 * Minimum charging rate supported by the EV. The unit of measure is defined by the chargingRateUnit. This parameter is intended to be used by a local smart charging algorithm to optimize the power allocation for in the case a charging process is inefficient at lower charging rates. Accepts at most one digit fraction (e.g. 8.1)
	 */
	public ?int $minChargingRate = null;

	/**
	 * Sales_ Tariff
	 * urn:x-oca:ocpp:uid:2:233272
	 * NOTE: This dataType is based on dataTypes from <<ref-ISOIEC15118-2,ISO 15118-2>>.
	 */
	public ?array $salesTariff = null;
}
