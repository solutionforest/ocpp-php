<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TariffCost;

class TotalCostType extends Datatype
{
	/**
	 * Currency of the costs in ISO 4217 Code.
	 */
	public string $currency;

	/**
	 * Type of cost: normal or the minimum or maximum cost.
	 */
	public string|TariffCost $typeOfCost;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $fixed = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $energy = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $chargingTime = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $idleTime = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $reservationTime = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $reservationFixed = null;

	/**
	 * Total cost with and without tax. Contains the total of energy, charging time, idle time, fixed and reservation costs including and/or excluding tax.
	 */
	public TotalPriceType $total;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
