<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class PriceLevelScheduleEntryType extends Datatype
{
	/**
	 * The amount of seconds that define the duration of this given PriceLevelScheduleEntry.
	 */
	public int $duration;

	/**
	 * Defines the price level of this PriceLevelScheduleEntry (referring to NumberOfPriceLevels). Small values for the PriceLevel represent a cheaper PriceLevelScheduleEntry. Large values for the PriceLevel represent a more expensive PriceLevelScheduleEntry.
	 */
	public int $priceLevel;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
