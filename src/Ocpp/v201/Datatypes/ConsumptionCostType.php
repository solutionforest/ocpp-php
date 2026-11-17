<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class ConsumptionCostType extends Datatype
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Consumption_ Cost. Start_ Value. Numeric
	 * urn:x-oca:ocpp:uid:1:569246
	 * The lowest level of consumption that defines the starting point of this consumption block. The block interval extends to the start of the next interval.
	 */
	public float $startValue;

	/** @var list<CostType> */
	#[ListOf(CostType::class)]
	public array $cost;
}
