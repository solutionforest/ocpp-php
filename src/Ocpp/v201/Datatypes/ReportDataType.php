<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class ReportDataType extends Datatype
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * A physical or logical component
	 */
	public ComponentType $component;

	/**
	 * Reference key to a component-variable.
	 */
	public VariableType $variable;

	/** @var list<VariableAttributeType> */
	#[ListOf(VariableAttributeType::class)]
	public array $variableAttribute;

	/**
	 * Fixed read-only parameters of a variable.
	 */
	public ?VariableCharacteristicsType $variableCharacteristics = null;
}
