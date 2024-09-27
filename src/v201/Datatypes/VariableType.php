<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class VariableType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Name of the variable. Name should be taken from the list of standardized variable names whenever possible. Case Insensitive. strongly advised to use Camel Case.
	 */
	public string $name;

	/**
	 * Name of instance in case the variable exists as multiple instances. Case Insensitive. strongly advised to use Camel Case.
	 */
	public ?string $instance = null;
}
