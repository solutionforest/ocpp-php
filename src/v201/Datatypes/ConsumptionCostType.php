<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

class ConsumptionCostType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Consumption_ Cost. Start_ Value. Numeric
	 * urn:x-oca:ocpp:uid:1:569246
	 * The lowest level of consumption that defines the starting point of this consumption block. The block interval extends to the start of the next interval.
	 */
	public int $startValue;
	public array $cost;
}
