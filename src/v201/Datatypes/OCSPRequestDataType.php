<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class OCSPRequestDataType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Used algorithms for the hashes provided.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\HashAlgorithm $hashAlgorithm;

	/**
	 * Hashed value of the Issuer DN (Distinguished Name).
	 */
	public string $issuerNameHash;

	/**
	 * Hashed value of the issuers public key
	 */
	public string $issuerKeyHash;

	/**
	 * The serial number of the certificate.
	 */
	public string $serialNumber;

	/**
	 * This contains the responder URL (Case insensitive).
	 */
	public string $responderURL;
}
