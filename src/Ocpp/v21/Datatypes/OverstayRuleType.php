<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class OverstayRuleType extends Datatype
{
	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public RationalNumberType $overstayFee;

	/**
	 * Human readable string to identify the overstay rule.
	 */
	public ?string $overstayRuleDescription = null;

	/**
	 * Time in seconds after trigger of the parent Overstay Rules for this particular fee to apply.
	 */
	public int $startTime;

	/**
	 * Time till overstay will be reapplied
	 */
	public int $overstayFeePeriod;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
