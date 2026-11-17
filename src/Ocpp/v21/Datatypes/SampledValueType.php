<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Location;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Measurand;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Phase;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ReadingContext;

class SampledValueType extends Datatype
{
	/**
	 * Indicates the measured value.
	 */
	public float $value;

	/**
	 * Type of measurement. Default = "Energy.Active.Import.Register"
	 */
	public null|string|Measurand $measurand = null;

	/**
	 * Type of detail value: start, end or sample. Default = "Sample.Periodic"
	 */
	public null|string|ReadingContext $context = null;

	/**
	 * Indicates how the measured value is to be interpreted. For instance between L1 and neutral (L1-N) Please note that not all values of phase are applicable to all Measurands. When phase is absent, the measured value is interpreted as an overall value.
	 */
	public null|string|Phase $phase = null;

	/**
	 * Indicates where the measured value has been sampled. Default =  "Outlet"
	 */
	public null|string|Location $location = null;

	/**
	 * Represent a signed version of the meter value.
	 */
	public ?SignedMeterValueType $signedMeterValue = null;

	/**
	 * Represents a UnitOfMeasure with a multiplier
	 */
	public ?UnitOfMeasureType $unitOfMeasure = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
