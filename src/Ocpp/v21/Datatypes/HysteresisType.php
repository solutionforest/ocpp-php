<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class HysteresisType extends Datatype
{
	/**
	 * High value for return to normal operation after a grid event, in absolute value. This value adopts the same unit as defined by yUnit
	 */
	public ?float $hysteresisHigh = null;

	/**
	 * Low value for return to normal operation after a grid event, in absolute value. This value adopts the same unit as defined by yUnit
	 */
	public ?float $hysteresisLow = null;

	/**
	 * Delay in seconds, once grid parameter within HysteresisLow and HysteresisHigh, for the EV to return to normal operation after a grid event.
	 */
	public ?float $hysteresisDelay = null;

	/**
	 * Set default rate of change (ramp rate %/s) for the EV to return to normal operation after a grid event
	 */
	public ?float $hysteresisGradient = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
