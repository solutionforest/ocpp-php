<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class RationalNumberType extends Datatype
{
	/**
	 * The exponent to base 10 (dec)
	 */
	public int $exponent;

	/**
	 * Value which shall be multiplied.
	 */
	public int $value;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
