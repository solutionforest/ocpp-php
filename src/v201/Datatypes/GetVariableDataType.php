<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class GetVariableDataType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Attribute type for which value is requested. When absent, default Actual is assumed.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\Attribute $attributeType = null;

	/**
	 * A physical or logical component
	 */
	public array $component;

	/**
	 * Reference key to a component-variable.
	 */
	public array $variable;
}
