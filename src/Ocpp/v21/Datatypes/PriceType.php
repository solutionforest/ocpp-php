<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class PriceType extends Datatype
{
	/**
	 * Price/cost excluding tax. Can be absent if _inclTax_ is present.
	 */
	public ?float $exclTax = null;

	/**
	 * Price/cost including tax. Can be absent if _exclTax_ is present.
	 */
	public ?float $inclTax = null;

	/** @var list<TaxRateType>|null */
	#[ListOf(TaxRateType::class)]
	public ?array $taxRates = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
