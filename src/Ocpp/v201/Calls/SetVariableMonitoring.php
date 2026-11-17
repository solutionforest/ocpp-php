<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\SetMonitoringDataType;

class SetVariableMonitoring extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<SetMonitoringDataType> */
	#[ListOf(SetMonitoringDataType::class)]
	public array $setMonitoringData;
}
