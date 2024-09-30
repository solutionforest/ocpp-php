<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class CompositeScheduleType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public array $chargingSchedulePeriod;

	/**
	 * The ID of the EVSE for which the
	 * schedule is requested. When evseid=0, the
	 * Charging Station calculated the expected
	 * consumption for the grid connection.
	 */
	public int $evseId;

	/**
	 * Duration of the schedule in seconds.
	 */
	public int $duration;

	/**
	 * Composite_ Schedule. Start. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569456
	 * Date and time at which the schedule becomes active. All time measurements within the schedule are relative to this timestamp.
	 */
	public string $scheduleStart;

	/**
	 * The unit of measure Limit is
	 * expressed in.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\ChargingRateUnit $chargingRateUnit;
}
