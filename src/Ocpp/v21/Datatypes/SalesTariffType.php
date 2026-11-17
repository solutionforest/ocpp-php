<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class SalesTariffType extends Datatype
{
	/**
	 * SalesTariff identifier used to identify one sales tariff. An SAID remains a unique identifier for one schedule throughout a charging session.
	 */
	public int $id;

	/**
	 * A human readable title/short description of the sales tariff e.g. for HMI display purposes.
	 */
	public ?string $salesTariffDescription = null;

	/**
	 * Defines the overall number of distinct price levels used across all provided SalesTariff elements.
	 */
	public ?int $numEPriceLevels = null;

	/** @var list<SalesTariffEntryType> */
	#[ListOf(SalesTariffEntryType::class)]
	public array $salesTariffEntry;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
