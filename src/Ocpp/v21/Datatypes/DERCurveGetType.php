<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControl;

class DERCurveGetType extends Datatype
{
	public DERCurveType $curve;

	/**
	 * Id of DER curve
	 */
	public string $id;

	/**
	 * Type of DER curve
	 */
	public string|DERControl $curveType;

	/**
	 * True if this is a default curve
	 */
	public bool $isDefault;

	/**
	 * True if this setting is superseded by a higher priority setting (i.e. lower value of _priority_)
	 */
	public bool $isSuperseded;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
