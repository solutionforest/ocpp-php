<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class OverstayRuleListType extends Datatype
{
	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public ?RationalNumberType $overstayPowerThreshold = null;

	/** @var list<OverstayRuleType> */
	#[ListOf(OverstayRuleType::class)]
	public array $overstayRule;

	/**
	 * Time till overstay is applied in seconds.
	 */
	public ?int $overstayTimeThreshold = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
