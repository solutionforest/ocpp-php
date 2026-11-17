<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class MeterValue extends Datatype
{
	public string $timestamp;

	/** @var list<SampledValue> */
	#[ListOf(SampledValue::class)]
	public array $sampledValue;
}
