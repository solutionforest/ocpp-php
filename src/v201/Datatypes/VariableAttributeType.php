<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class VariableAttributeType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Attribute: Actual, MinSet, MaxSet, etc.
	 * Defaults to Actual if absent.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\Attribute $type = null;

	/**
	 * Value of the attribute. May only be omitted when mutability is set to 'WriteOnly'.
	 *
	 * The Configuration Variable <<configkey-reporting-value-size,ReportingValueSize>> can be used to limit GetVariableResult.attributeValue, VariableAttribute.value and EventData.actualValue. The max size of these values will always remain equal.
	 */
	public ?string $value = null;

	/**
	 * Defines the mutability of this attribute. Default is ReadWrite when omitted.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\Mutability $mutability = null;

	/**
	 * If true, value will be persistent across system reboots or power down. Default when omitted is false.
	 */
	public ?bool $persistent = null;

	/**
	 * If true, value that will never be changed by the Charging Station at runtime. Default when omitted is false.
	 */
	public ?bool $constant = null;
}
