<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\Attribute;

class SetVariableDataType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Type of attribute: Actual, Target, MinSet, MaxSet. Default is Actual when omitted.
	 */
	public null|string|Attribute $attributeType = null;

	/**
	 * Value to be assigned to attribute of variable.
	 *
	 * The Configuration Variable <<configkey-configuration-value-size,ConfigurationValueSize>> can be used to limit SetVariableData.attributeValue and VariableCharacteristics.valueList. The max size of these values will always remain equal.
	 */
	public string $attributeValue;

	/**
	 * A physical or logical component
	 */
	public array $component;

	/**
	 * Reference key to a component-variable.
	 */
	public array $variable;
}
