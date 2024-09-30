<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class RelativeTimeIntervalType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Relative_ Timer_ Interval. Start. Elapsed_ Time
	 * urn:x-oca:ocpp:uid:1:569279
	 * Start of the interval, in seconds from NOW.
	 */
	public int $start;

	/**
	 * Relative_ Timer_ Interval. Duration. Elapsed_ Time
	 * urn:x-oca:ocpp:uid:1:569280
	 * Duration of the interval, in seconds.
	 */
	public ?int $duration = null;
}
