<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class MeterValueType extends Datatype
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<SampledValueType> */
	#[ListOf(SampledValueType::class)]
	public array $sampledValue;

	/**
	 * Meter_ Value. Timestamp. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569259
	 * Timestamp for measured value(s).
	 */
	public string $timestamp;
}
