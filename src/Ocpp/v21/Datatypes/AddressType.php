<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class AddressType extends Datatype
{
	/**
	 * Name of person/company
	 */
	public string $name;

	/**
	 * Address line 1
	 */
	public string $address1;

	/**
	 * Address line 2
	 */
	public ?string $address2 = null;

	/**
	 * City
	 */
	public string $city;

	/**
	 * Postal code
	 */
	public ?string $postalCode = null;

	/**
	 * Country name
	 */
	public string $country;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
