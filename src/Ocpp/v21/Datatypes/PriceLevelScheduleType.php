<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class PriceLevelScheduleType extends Datatype
{
	/** @var list<PriceLevelScheduleEntryType> */
	#[ListOf(PriceLevelScheduleEntryType::class)]
	public array $priceLevelScheduleEntries;

	/**
	 * Starting point of this price schedule.
	 */
	public string $timeAnchor;

	/**
	 * Unique ID of this price schedule.
	 */
	public int $priceScheduleId;

	/**
	 * Description of the price schedule.
	 */
	public ?string $priceScheduleDescription = null;

	/**
	 * Defines the overall number of distinct price level elements used across all PriceLevelSchedules.
	 */
	public int $numberOfPriceLevels;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
