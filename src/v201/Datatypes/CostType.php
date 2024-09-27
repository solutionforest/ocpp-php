<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class CostType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Cost. Cost_ Kind. Cost_ Kind_ Code
	 * urn:x-oca:ocpp:uid:1:569243
	 * The kind of cost referred to in the message element amount
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\CostKind $costKind = null;

	/**
	 * Cost. Amount. Amount
	 * urn:x-oca:ocpp:uid:1:569244
	 * The estimated or actual cost per kWh
	 */
	public ?int $amount = null;

	/**
	 * Cost. Amount_ Multiplier. Integer
	 * urn:x-oca:ocpp:uid:1:569245
	 * Values: -3..3, The amountMultiplier defines the exponent to base 10 (dec). The final value is determined by: amount * 10 ^ amountMultiplier
	 */
	public ?int $amountMultiplier = null;
}
