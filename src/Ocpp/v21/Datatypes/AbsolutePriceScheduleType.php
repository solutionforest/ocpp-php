<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class AbsolutePriceScheduleType extends Datatype
{
	/**
	 * Starting point of price schedule.
	 */
	public string $timeAnchor;

	/**
	 * Unique ID of price schedule
	 */
	public int $priceScheduleID;

	/**
	 * Description of the price schedule.
	 */
	public ?string $priceScheduleDescription = null;

	/**
	 * Currency according to ISO 4217.
	 */
	public string $currency;

	/**
	 * String that indicates what language is used for the human readable strings in the price schedule. Based on ISO 639.
	 */
	public string $language;

	/**
	 * A string in URN notation which shall uniquely identify an algorithm that defines how to compute an energy fee sum for a specific power profile based on the EnergyFee information from the PriceRule elements.
	 */
	public string $priceAlgorithm;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public ?RationalNumberType $minimumCost = null;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public ?RationalNumberType $maximumCost = null;

	/** @var list<PriceRuleStackType> */
	#[ListOf(PriceRuleStackType::class)]
	public array $priceRuleStacks;

	/** @var list<TaxRuleType>|null */
	#[ListOf(TaxRuleType::class)]
	public ?array $taxRules = null;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public ?OverstayRuleListType $overstayRuleList = null;

	/** @var list<AdditionalSelectedServicesType>|null */
	#[ListOf(AdditionalSelectedServicesType::class)]
	public ?array $additionalSelectedServices = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
