<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class OCSPRequestDataType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Used algorithms for the hashes provided.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\HashAlgorithm $hashAlgorithm = null;

	/**
	 * Hashed value of the Issuer DN (Distinguished Name).
	 */
	public ?string $issuerNameHash = null;

	/**
	 * Hashed value of the issuers public key
	 */
	public ?string $issuerKeyHash = null;

	/**
	 * The serial number of the certificate.
	 */
	public ?string $serialNumber = null;

	/**
	 * This contains the responder URL (Case insensitive).
	 */
	public ?string $responderURL = null;
}
