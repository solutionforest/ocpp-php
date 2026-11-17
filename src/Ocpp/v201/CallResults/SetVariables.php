<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\SetVariableResultType;

class SetVariables extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<SetVariableResultType> */
	#[ListOf(SetVariableResultType::class)]
	public array $setVariableResult;
}
