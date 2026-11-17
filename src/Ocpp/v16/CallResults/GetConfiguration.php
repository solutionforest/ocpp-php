<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\KeyValue;

class GetConfiguration extends CallResult
{
	/** @var list<KeyValue>|null */
	#[ListOf(KeyValue::class)]
	public ?array $configurationKey = null;
	public ?array $unknownKey = null;
}
