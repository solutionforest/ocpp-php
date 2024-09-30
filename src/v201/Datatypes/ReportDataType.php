<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class ReportDataType
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
	public array $variable;
	public array $variableAttribute;

	/**
	 * Fixed read-only parameters of a variable.
	 */
	public ?array $variableCharacteristics = null;
}
