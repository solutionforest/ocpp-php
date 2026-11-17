<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class SalesTariffType extends Datatype
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Identified_ Object. MRID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:569198
	 * SalesTariff identifier used to identify one sales tariff. An SAID remains a unique identifier for one schedule throughout a charging session.
	 */
	public int $id;

	/**
	 * Sales_ Tariff. Sales. Tariff_ Description
	 * urn:x-oca:ocpp:uid:1:569283
	 * A human readable title/short description of the sales tariff e.g. for HMI display purposes.
	 */
	public ?string $salesTariffDescription = null;

	/**
	 * Sales_ Tariff. Num_ E_ Price_ Levels. Counter
	 * urn:x-oca:ocpp:uid:1:569284
	 * Defines the overall number of distinct price levels used across all provided SalesTariff elements.
	 */
	public ?int $numEPriceLevels = null;

	/** @var list<SalesTariffEntryType> */
	#[ListOf(SalesTariffEntryType::class)]
	public array $salesTariffEntry;
}
