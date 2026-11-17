<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class IdTokenType extends Datatype
{
	/** @var list<AdditionalInfoType>|null */
	#[ListOf(AdditionalInfoType::class)]
	public ?array $additionalInfo = null;

	/**
	 * *(2.1)* IdToken is case insensitive. Might hold the hidden id of an RFID tag, but can for example also contain a UUID.
	 */
	public string $idToken;

	/**
	 * *(2.1)* Enumeration of possible idToken types. Values defined in Appendix as IdTokenEnumStringType.
	 */
	public string $type;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
