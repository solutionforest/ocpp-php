<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class FirmwareType extends Datatype
{
	/**
	 * URI defining the origin of the firmware.
	 */
	public string $location;

	/**
	 * Date and time at which the firmware shall be retrieved.
	 */
	public string $retrieveDateTime;

	/**
	 * Date and time at which the firmware shall be installed.
	 */
	public ?string $installDateTime = null;

	/**
	 * Certificate with which the firmware was signed.
	 * PEM encoded X.509 certificate.
	 */
	public ?string $signingCertificate = null;

	/**
	 * Base64 encoded firmware signature.
	 */
	public ?string $signature = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
