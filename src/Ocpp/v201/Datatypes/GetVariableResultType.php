<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\Attribute;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GetVariableStatus;

class GetVariableResultType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $attributeStatusInfo = null;

	/**
	 * Result status of getting the variable.
	 */
	public string|GetVariableStatus $attributeStatus;

	/**
	 * Attribute type for which value is requested. When absent, default Actual is assumed.
	 */
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
	public array $component;

	/**
	 * Reference key to a component-variable.
	 */
	public array $variable;
}
