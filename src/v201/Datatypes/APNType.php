<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

use SolutionForest\OcppPhp\v201\Enums\APNAuthentication;

class APNType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * APN. APN. URI
	 * urn:x-oca:ocpp:uid:1:568814
	 * The Access Point Name as an URL.
	 */
	public string $apn;

	/**
	 * APN. APN. User_ Name
	 * urn:x-oca:ocpp:uid:1:568818
	 * APN username.
	 */
	public ?string $apnUserName = null;

	/**
	 * APN. APN. Password
	 * urn:x-oca:ocpp:uid:1:568819
	 * APN Password.
	 */
	public ?string $apnPassword = null;

	/**
	 * APN. SIMPIN. PIN_ Code
	 * urn:x-oca:ocpp:uid:1:568821
	 * SIM card pin code.
	 */
	public ?int $simPin = null;

	/**
	 * APN. Preferred_ Network. Mobile_ Network_ ID
	 * urn:x-oca:ocpp:uid:1:568822
	 * Preferred network, written as MCC and MNC concatenated. See note.
	 */
	public ?string $preferredNetwork = null;

	/**
	 * APN. Use_ Only_ Preferred_ Network. Indicator
	 * urn:x-oca:ocpp:uid:1:568824
	 * Default: false. Use only the preferred Network, do
	 * not dial in when not available. See Note.
	 */
	public ?bool $useOnlyPreferredNetwork = null;

	/**
	 * APN. APN_ Authentication. APN_ Authentication_ Code
	 * urn:x-oca:ocpp:uid:1:568828
	 * Authentication method.
	 */
	public string|APNAuthentication $apnAuthentication;
}
