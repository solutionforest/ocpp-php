<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

class SalesTariffEntryType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Relative_ Timer_ Interval
	 * urn:x-oca:ocpp:uid:2:233270
	 */
	public array $relativeTimeInterval;

	/**
	 * Sales_ Tariff_ Entry. E_ Price_ Level. Unsigned_ Integer
	 * urn:x-oca:ocpp:uid:1:569281
	 * Defines the price level of this SalesTariffEntry (referring to NumEPriceLevels). Small values for the EPriceLevel represent a cheaper TariffEntry. Large values for the EPriceLevel represent a more expensive TariffEntry.
	 */
	public ?int $ePriceLevel = null;
	public ?array $consumptionCost = null;
}
