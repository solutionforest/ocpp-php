<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ComponentType extends Datatype
{
	/**
	 * Electric Vehicle Supply Equipment
	 */
	public ?EVSEType $evse = null;

	/**
	 * Name of the component. Name should be taken from the list of standardized component names whenever possible. Case Insensitive. strongly advised to use Camel Case.
	 */
	public string $name;

	/**
	 * Name of instance in case the component exists as multiple instances. Case Insensitive. strongly advised to use Camel Case.
	 */
	public ?string $instance = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
