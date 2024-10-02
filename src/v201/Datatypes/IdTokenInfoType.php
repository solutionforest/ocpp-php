<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\AuthorizationStatus;

class IdTokenInfoType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * ID_ Token. Status. Authorization_ Status
	 * urn:x-oca:ocpp:uid:1:569372
	 * Current status of the ID Token.
	 */
	public string|AuthorizationStatus $status;

	/**
	 * ID_ Token. Expiry. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569373
	 * Date and Time after which the token must be considered invalid.
	 */
	public ?string $cacheExpiryDateTime = null;

	/**
	 * Priority from a business point of view. Default priority is 0, The range is from -9 to 9. Higher values indicate a higher priority. The chargingPriority in <<transactioneventresponse,TransactionEventResponse>> overrules this one.
	 */
	public ?int $chargingPriority = null;

	/**
	 * ID_ Token. Language1. Language_ Code
	 * urn:x-oca:ocpp:uid:1:569374
	 * Preferred user interface language of identifier user. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language1 = null;

	/**
	 * Only used when the IdToken is only valid for one or more specific EVSEs, not for the entire Charging Station.
	 */
	public ?array $evseId = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?array $groupIdToken = null;

	/**
	 * ID_ Token. Language2. Language_ Code
	 * urn:x-oca:ocpp:uid:1:569375
	 * Second preferred user interface language of identifier user. Don’t use when language1 is omitted, has to be different from language1. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language2 = null;

	/**
	 * Message_ Content
	 * urn:x-enexis:ecdm:uid:2:234490
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public ?array $personalMessage = null;
}
