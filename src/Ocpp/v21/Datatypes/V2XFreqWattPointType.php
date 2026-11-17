<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class V2XFreqWattPointType extends Datatype
{
	/**
	 * Net frequency in Hz.
	 */
	public float $frequency;

	/**
	 * Power in W to charge (positive) or discharge (negative) at specified frequency.
	 */
	public float $power;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
