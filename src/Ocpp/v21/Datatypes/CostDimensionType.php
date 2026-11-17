<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\CostDimension;

class CostDimensionType extends Datatype
{
	/**
	 * Type of cost dimension: energy, power, time, etc.
	 */
	public string|CostDimension $type;

	/**
	 * Volume of the dimension consumed, measured according to the dimension type.
	 */
	public float $volume;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
