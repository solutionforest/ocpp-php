<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Attribute;

class GetVariableDataType extends Datatype
{
	/**
	 * Attribute type for which value is requested. When absent, default Actual is assumed.
	 */
	public null|string|Attribute $attributeType = null;

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
