<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class EVAbsolutePriceScheduleType extends Datatype
{
	/**
	 * Starting point in time of the EVEnergyOffer.
	 */
	public string $timeAnchor;

	/**
	 * Currency code according to ISO 4217.
	 */
	public string $currency;

	/** @var list<EVAbsolutePriceScheduleEntryType> */
	#[ListOf(EVAbsolutePriceScheduleEntryType::class)]
	public array $evAbsolutePriceScheduleEntries;

	/**
	 * ISO 15118-20 URN of price algorithm: Power, PeakPower, StackedEnergy.
	 */
	public string $priceAlgorithm;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
