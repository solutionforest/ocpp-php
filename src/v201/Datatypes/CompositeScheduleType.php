<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class CompositeScheduleType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $chargingSchedulePeriod = null;

	/**
	 * The ID of the EVSE for which the
	 * schedule is requested. When evseid=0, the
	 * Charging Station calculated the expected
	 * consumption for the grid connection.
	 */
	public ?int $evseId = null;

	/**
	 * Duration of the schedule in seconds.
	 */
	public ?int $duration = null;

	/**
	 * Composite_ Schedule. Start. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569456
	 * Date and time at which the schedule becomes active. All time measurements within the schedule are relative to this timestamp.
	 */
	public ?string $scheduleStart = null;

	/**
	 * The unit of measure Limit is
	 * expressed in.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\ChargingRateUnit $chargingRateUnit = null;
}
