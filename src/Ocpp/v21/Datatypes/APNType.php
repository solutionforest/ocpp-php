<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\APNAuthentication;

class APNType extends Datatype
{
	/**
	 * The Access Point Name as an URL.
	 */
	public string $apn;

	/**
	 * APN username.
	 */
	public ?string $apnUserName = null;

	/**
	 * *(2.1)* APN Password.
	 */
	public ?string $apnPassword = null;

	/**
	 * SIM card pin code.
	 */
	public ?int $simPin = null;

	/**
	 * Preferred network, written as MCC and MNC concatenated. See note.
	 */
	public ?string $preferredNetwork = null;

	/**
	 * Default: false. Use only the preferred Network, do
	 * not dial in when not available. See Note.
	 */
	public ?bool $useOnlyPreferredNetwork = null;

	/**
	 * Authentication method.
	 */
	public string|APNAuthentication $apnAuthentication;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
