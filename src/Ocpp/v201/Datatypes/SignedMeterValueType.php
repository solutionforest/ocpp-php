<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

class SignedMeterValueType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Base64 encoded, contains the signed data which might contain more then just the meter value. It can contain information like timestamps, reference to a customer etc.
	 */
	public string $signedMeterData;

	/**
	 * Method used to create the digital signature.
	 */
	public string $signingMethod;

	/**
	 * Method used to encode the meter values before applying the digital signature algorithm.
	 */
	public string $encodingMethod;

	/**
	 * Base64 encoded, sending depends on configuration variable _PublicKeyWithSignedMeterValue_.
	 */
	public string $publicKey;
}
