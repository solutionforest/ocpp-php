<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class TariffType extends Datatype
{
	/**
	 * Unique id of tariff
	 */
	public string $tariffId;

	/** @var list<MessageContentType>|null */
	#[ListOf(MessageContentType::class)]
	public ?array $description = null;

	/**
	 * Currency code according to ISO 4217
	 */
	public string $currency;

	/**
	 * Price elements and tax for energy
	 */
	public ?TariffEnergyType $energy = null;

	/**
	 * Time when this tariff becomes active. When absent, it is immediately active.
	 */
	public ?string $validFrom = null;

	/**
	 * Price elements and tax for time
	 */
	public ?TariffTimeType $chargingTime = null;

	/**
	 * Price elements and tax for time
	 */
	public ?TariffTimeType $idleTime = null;
	public ?TariffFixedType $fixedFee = null;

	/**
	 * Price elements and tax for time
	 */
	public ?TariffTimeType $reservationTime = null;
	public ?TariffFixedType $reservationFixed = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $minCost = null;

	/**
	 * Price with and without tax. At least one of _exclTax_, _inclTax_ must be present.
	 */
	public ?PriceType $maxCost = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
