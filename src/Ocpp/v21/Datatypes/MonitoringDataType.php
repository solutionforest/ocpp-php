<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class MonitoringDataType extends Datatype
{
	/**
	 * A physical or logical component
	 */
	public ComponentType $component;

	/**
	 * Reference key to a component-variable.
	 */
	public VariableType $variable;

	/** @var list<VariableMonitoringType> */
	#[ListOf(VariableMonitoringType::class)]
	public array $variableMonitoring;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
