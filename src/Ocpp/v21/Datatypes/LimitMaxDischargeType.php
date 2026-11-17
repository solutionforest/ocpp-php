<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class LimitMaxDischargeType extends Datatype
{
	/**
	 * Priority of setting (0=highest)
	 */
	public int $priority;

	/**
	 * Only for PowerMonitoring. +
	 *     The value specifies a percentage (0 to 100) of the rated maximum discharge power of EV.
	 *     The PowerMonitoring curve becomes active when power exceeds this percentage.
	 */
	public ?float $pctMaxDischargePower = null;
	public ?DERCurveType $powerMonitoringMustTrip = null;

	/**
	 * Time when this setting becomes active
	 */
	public ?string $startTime = null;

	/**
	 * Duration in seconds that this setting is active
	 */
	public ?float $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
