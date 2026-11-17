<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;

class ReserveNow extends Call
{
	/**
	 * Id of reservation.
	 */
	public int $id;

	/**
	 * Date and time at which the reservation expires.
	 */
	public string $expiryDateTime;

	/**
	 * This field specifies the connector type. Values defined in Appendix as ConnectorEnumStringType.
	 */
	public ?string $connectorType = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * This contains ID of the evse to be reserved.
	 */
	public ?int $evseId = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?IdTokenType $groupIdToken = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
