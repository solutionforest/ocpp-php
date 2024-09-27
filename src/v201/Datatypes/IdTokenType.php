<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class IdTokenType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $additionalInfo = null;

	/**
	 * IdToken is case insensitive. Might hold the hidden id of an RFID tag, but can for example also contain a UUID.
	 */
	public ?string $idToken = null;

	/**
	 * Enumeration of possible idToken types.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\IdToken $type = null;
}
