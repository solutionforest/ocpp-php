<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class RelativeTimeIntervalType extends Datatype
{
	/**
	 * Start of the interval, in seconds from NOW.
	 */
	public int $start;

	/**
	 * Duration of the interval, in seconds.
	 */
	public ?int $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
