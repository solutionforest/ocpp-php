<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class FirmwareType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Firmware. Location. URI
	 * urn:x-enexis:ecdm:uid:1:569460
	 * URI defining the origin of the firmware.
	 */
	public ?string $location = null;

	/**
	 * Firmware. Retrieve. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569461
	 * Date and time at which the firmware shall be retrieved.
	 */
	public ?string $retrieveDateTime = null;

	/**
	 * Firmware. Install. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569462
	 * Date and time at which the firmware shall be installed.
	 */
	public ?string $installDateTime = null;

	/**
	 * Certificate with which the firmware was signed.
	 * PEM encoded X.509 certificate.
	 */
	public ?string $signingCertificate = null;

	/**
	 * Firmware. Signature. Signature
	 * urn:x-enexis:ecdm:uid:1:569464
	 * Base64 encoded firmware signature.
	 */
	public ?string $signature = null;
}
