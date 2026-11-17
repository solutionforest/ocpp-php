<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\CostKind;

class CostType extends Datatype
{
	/**
	 * The kind of cost referred to in the message element amount
	 */
	public string|CostKind $costKind;

	/**
	 * The estimated or actual cost per kWh
	 */
	public int $amount;

	/**
	 * Values: -3..3, The amountMultiplier defines the exponent to base 10 (dec). The final value is determined by: amount * 10 ^ amountMultiplier
	 */
	public ?int $amountMultiplier = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
