<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\Location;
use SolutionForest\OocpPhp\v201\Enums\Measurand;
use SolutionForest\OocpPhp\v201\Enums\Phase;
use SolutionForest\OocpPhp\v201\Enums\ReadingContext;

class SampledValueType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Sampled_ Value. Value. Measure
	 * urn:x-oca:ocpp:uid:1:569260
	 * Indicates the measured value.
	 */
	public int $value;

	/**
	 * Sampled_ Value. Context. Reading_ Context_ Code
	 * urn:x-oca:ocpp:uid:1:569261
	 * Type of detail value: start, end or sample. Default = "Sample.Periodic"
	 */
	public null|string|ReadingContext $context = null;

	/**
	 * Sampled_ Value. Measurand. Measurand_ Code
	 * urn:x-oca:ocpp:uid:1:569263
	 * Type of measurement. Default = "Energy.Active.Import.Register"
	 */
	public null|string|Measurand $measurand = null;

	/**
	 * Sampled_ Value. Phase. Phase_ Code
	 * urn:x-oca:ocpp:uid:1:569264
	 * Indicates how the measured value is to be interpreted. For instance between L1 and neutral (L1-N) Please note that not all values of phase are applicable to all Measurands. When phase is absent, the measured value is interpreted as an overall value.
	 */
	public null|string|Phase $phase = null;

	/**
	 * Sampled_ Value. Location. Location_ Code
	 * urn:x-oca:ocpp:uid:1:569265
	 * Indicates where the measured value has been sampled. Default =  "Outlet"
	 */
	public null|string|Location $location = null;

	/**
	 * Represent a signed version of the meter value.
	 */
	public ?array $signedMeterValue = null;

	/**
	 * Represents a UnitOfMeasure with a multiplier
	 */
	public ?array $unitOfMeasure = null;
}
