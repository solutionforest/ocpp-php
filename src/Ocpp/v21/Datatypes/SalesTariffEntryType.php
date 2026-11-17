<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class SalesTariffEntryType extends Datatype
{
	public RelativeTimeIntervalType $relativeTimeInterval;

	/**
	 * Defines the price level of this SalesTariffEntry (referring to NumEPriceLevels). Small values for the EPriceLevel represent a cheaper TariffEntry. Large values for the EPriceLevel represent a more expensive TariffEntry.
	 */
	public ?int $ePriceLevel = null;

	/** @var list<ConsumptionCostType>|null */
	#[ListOf(ConsumptionCostType::class)]
	public ?array $consumptionCost = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
