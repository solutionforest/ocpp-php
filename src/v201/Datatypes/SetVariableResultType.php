<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class SetVariableResultType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Type of attribute: Actual, Target, MinSet, MaxSet. Default is Actual when omitted.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\Attribute $attributeType = null;

	/**
	 * Result status of setting the variable.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\SetVariableStatus $attributeStatus = null;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $attributeStatusInfo = null;

	/**
	 * A physical or logical component
	 */
	public ?array $component = null;

	/**
	 * Reference key to a component-variable.
	 */
	public ?array $variable = null;
}
