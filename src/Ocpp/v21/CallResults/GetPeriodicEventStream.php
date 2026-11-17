<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ConstantStreamDataType;

class GetPeriodicEventStream extends CallResult
{
	/** @var list<ConstantStreamDataType>|null */
	#[ListOf(ConstantStreamDataType::class)]
	public ?array $constantStreamData = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
