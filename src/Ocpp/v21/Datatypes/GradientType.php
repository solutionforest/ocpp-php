<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class GradientType extends Datatype
{
	/**
	 * Id of setting
	 */
	public int $priority;

	/**
	 * Default ramp rate in seconds (0 if not applicable)
	 */
	public float $gradient;

	/**
	 * Soft-start ramp rate in seconds (0 if not applicable)
	 */
	public float $softGradient;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
