<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Attribute;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GetVariableStatus;

class GetVariableResultType extends Datatype
{
	public string|GetVariableStatus $attributeStatus;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $attributeStatusInfo = null;
	public null|string|Attribute $attributeType = null;

	/**
	 * Value of requested attribute type of component-variable. This field can only be empty when the given status is NOT accepted.
	 *
	 * The Configuration Variable <<configkey-reporting-value-size,ReportingValueSize>> can be used to limit GetVariableResult.attributeValue, VariableAttribute.value and EventData.actualValue. The max size of these values will always remain equal.
	 */
	public ?string $attributeValue = null;

	/**
	 * A physical or logical component
	 */
	public ComponentType $component;

	/**
	 * Reference key to a component-variable.
	 */
	public VariableType $variable;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
