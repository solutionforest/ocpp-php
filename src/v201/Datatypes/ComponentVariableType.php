<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ComponentVariableType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * A physical or logical component
	 */
	public array $component;

	/**
	 * Reference key to a component-variable.
	 */
	public ?array $variable = null;
}
