<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\SetMonitoringResultType;

class SetVariableMonitoring extends CallResult
{
	/** @var list<SetMonitoringResultType> */
	#[ListOf(SetMonitoringResultType::class)]
	public array $setMonitoringResult;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
