<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\Attribute;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\SetVariableStatus;

class SetVariableResultType extends Datatype
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Type of attribute: Actual, Target, MinSet, MaxSet. Default is Actual when omitted.
	 */
	public null|string|Attribute $attributeType = null;

	/**
	 * Result status of setting the variable.
	 */
	public string|SetVariableStatus $attributeStatus;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $attributeStatusInfo = null;

	/**
	 * A physical or logical component
	 */
	public ComponentType $component;

	/**
	 * Reference key to a component-variable.
	 */
	public VariableType $variable;
}
