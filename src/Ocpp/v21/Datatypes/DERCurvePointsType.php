<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class DERCurvePointsType extends Datatype
{
	/**
	 * The data value of the X-axis (independent) variable, depending on the curve type.
	 */
	public float $x;

	/**
	 * The data value of the Y-axis (dependent) variable, depending on the  <<cmn_derunitenumtype>> of the curve. If _y_ is power factor, then a positive value means DER is absorbing reactive power (under-excited), a negative value when DER is injecting reactive power (over-excited).
	 */
	public float $y;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
