<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class MeterValueType extends Datatype
{
	/** @var list<SampledValueType> */
	#[ListOf(SampledValueType::class)]
	public array $sampledValue;

	/**
	 * Timestamp for measured value(s).
	 */
	public string $timestamp;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
