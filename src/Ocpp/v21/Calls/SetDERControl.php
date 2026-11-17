<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\DERCurveType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EnterServiceType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FixedPFType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FixedVarType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FreqDroopType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\GradientType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\LimitMaxDischargeType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControl;

class SetDERControl extends Call
{
	/**
	 * True if this is a default DER control
	 */
	public bool $isDefault;

	/**
	 * Unique id of this control, e.g. UUID
	 */
	public string $controlId;

	/**
	 * Type of control.  Determines which setting field below is used.
	 */
	public string|DERControl $controlType;
	public ?DERCurveType $curve = null;
	public ?EnterServiceType $enterService = null;
	public ?FixedPFType $fixedPFAbsorb = null;
	public ?FixedPFType $fixedPFInject = null;
	public ?FixedVarType $fixedVar = null;
	public ?FreqDroopType $freqDroop = null;
	public ?GradientType $gradient = null;
	public ?LimitMaxDischargeType $limitMaxDischarge = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
