<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class PriceRuleStackType extends Datatype
{
	/**
	 * Duration of the stack of price rules.  he amount of seconds that define the duration of the given PriceRule(s).
	 */
	public int $duration;

	/** @var list<PriceRuleType> */
	#[ListOf(PriceRuleType::class)]
	public array $priceRule;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
