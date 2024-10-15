<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\IdToken;

class IdTokenType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $additionalInfo = null;

	/**
	 * IdToken is case insensitive. Might hold the hidden id of an RFID tag, but can for example also contain a UUID.
	 */
	public string $idToken;

	/**
	 * Enumeration of possible idToken types.
	 */
	public string|IdToken $type;
}
