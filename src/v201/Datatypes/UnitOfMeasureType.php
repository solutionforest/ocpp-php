<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class UnitOfMeasureType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Unit of the value. Default = "Wh" if the (default) measurand is an "Energy" type.
	 * This field SHALL use a value from the list Standardized Units of Measurements in Part 2 Appendices.
	 * If an applicable unit is available in that list, otherwise a "custom" unit might be used.
	 */
	public ?string $unit = null;

	/**
	 * Multiplier, this value represents the exponent to base 10. I.e. multiplier 3 means 10 raised to the 3rd power. Default is 0.
	 */
	public ?int $multiplier = null;
}
