<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class TariffFixedType extends Datatype
{
	/** @var list<TariffFixedPriceType> */
	#[ListOf(TariffFixedPriceType::class)]
	public array $prices;

	/** @var list<TaxRateType>|null */
	#[ListOf(TaxRateType::class)]
	public ?array $taxRates = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
