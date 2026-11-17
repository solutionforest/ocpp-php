<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\AuthorizationStatus;

class IdTokenInfoType extends Datatype
{
	/**
	 * Current status of the ID Token.
	 */
	public string|AuthorizationStatus $status;

	/**
	 * Date and Time after which the token must be considered invalid.
	 */
	public ?string $cacheExpiryDateTime = null;

	/**
	 * Priority from a business point of view. Default priority is 0, The range is from -9 to 9. Higher values indicate a higher priority. The chargingPriority in <<transactioneventresponse,TransactionEventResponse>> overrules this one.
	 */
	public ?int $chargingPriority = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?IdTokenType $groupIdToken = null;

	/**
	 * Preferred user interface language of identifier user. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language1 = null;

	/**
	 * Second preferred user interface language of identifier user. Don’t use when language1 is omitted, has to be different from language1. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language2 = null;

	/**
	 * Only used when the IdToken is only valid for one or more specific EVSEs, not for the entire Charging Station.
	 */
	public ?array $evseId = null;

	/**
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public ?MessageContentType $personalMessage = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
