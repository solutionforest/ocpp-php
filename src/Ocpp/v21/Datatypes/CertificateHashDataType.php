<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\HashAlgorithm;

class CertificateHashDataType extends Datatype
{
	/**
	 * Used algorithms for the hashes provided.
	 */
	public string|HashAlgorithm $hashAlgorithm;

	/**
	 * The hash of the issuer’s distinguished
	 * name (DN), that must be calculated over the DER
	 * encoding of the issuer’s name field in the certificate
	 * being checked.
	 */
	public string $issuerNameHash;

	/**
	 * The hash of the DER encoded public key:
	 * the value (excluding tag and length) of the subject
	 * public key field in the issuer’s certificate.
	 */
	public string $issuerKeyHash;

	/**
	 * The string representation of the
	 * hexadecimal value of the serial number without the
	 * prefix "0x" and without leading zeroes.
	 */
	public string $serialNumber;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
