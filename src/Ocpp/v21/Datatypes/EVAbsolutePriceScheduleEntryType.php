<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class EVAbsolutePriceScheduleEntryType extends Datatype
{
	/**
	 * The amount of seconds of this entry.
	 */
	public int $duration;

	/** @var list<EVPriceRuleType> */
	#[ListOf(EVPriceRuleType::class)]
	public array $evPriceRule;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
