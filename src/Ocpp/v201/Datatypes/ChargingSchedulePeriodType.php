<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

class ChargingSchedulePeriodType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Charging_ Schedule_ Period. Start_ Period. Elapsed_ Time
	 * urn:x-oca:ocpp:uid:1:569240
	 * Start of the period, in seconds from the start of schedule. The value of StartPeriod also defines the stop time of the previous period.
	 */
	public int $startPeriod;

	/**
	 * Charging_ Schedule_ Period. Limit. Measure
	 * urn:x-oca:ocpp:uid:1:569241
	 * Charging rate limit during the schedule period, in the applicable chargingRateUnit, for example in Amperes (A) or Watts (W). Accepts at most one digit fraction (e.g. 8.1).
	 */
	public int $limit;

	/**
	 * Charging_ Schedule_ Period. Number_ Phases. Counter
	 * urn:x-oca:ocpp:uid:1:569242
	 * The number of phases that can be used for charging. If a number of phases is needed, numberPhases=3 will be assumed unless another number is given.
	 */
	public ?int $numberPhases = null;

	/**
	 * Values: 1..3, Used if numberPhases=1 and if the EVSE is capable of switching the phase connected to the EV, i.e. ACPhaseSwitchingSupported is defined and true. It’s not allowed unless both conditions above are true. If both conditions are true, and phaseToUse is omitted, the Charging Station / EVSE will make the selection on its own.
	 */
	public ?int $phaseToUse = null;
}
