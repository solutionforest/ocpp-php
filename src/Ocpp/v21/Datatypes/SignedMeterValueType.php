<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class SignedMeterValueType extends Datatype
{
	/**
	 * Base64 encoded, contains the signed data from the meter in the format specified in _encodingMethod_, which might contain more then just the meter value. It can contain information like timestamps, reference to a customer etc.
	 */
	public string $signedMeterData;

	/**
	 * *(2.1)* Method used to create the digital signature. Optional, if already included in _signedMeterData_. Standard values for this are defined in Appendix as SigningMethodEnumStringType.
	 */
	public ?string $signingMethod = null;

	/**
	 * Format used by the energy meter to encode the meter data. For example: OCMF or EDL.
	 */
	public string $encodingMethod;

	/**
	 * *(2.1)* Base64 encoded, sending depends on configuration variable _PublicKeyWithSignedMeterValue_.
	 */
	public ?string $publicKey = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
