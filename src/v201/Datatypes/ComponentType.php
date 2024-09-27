<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ComponentType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * EVSE
	 * urn:x-oca:ocpp:uid:2:233123
	 * Electric Vehicle Supply Equipment
	 */
	public ?array $evse = null;

	/**
	 * Name of the component. Name should be taken from the list of standardized component names whenever possible. Case Insensitive. strongly advised to use Camel Case.
	 */
	public string $name;

	/**
	 * Name of instance in case the component exists as multiple instances. Case Insensitive. strongly advised to use Camel Case.
	 */
	public ?string $instance = null;
}
