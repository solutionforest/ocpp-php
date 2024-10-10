<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\Connector;

class ReserveNow extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Id of reservation.
	 */
	public int $id;

	/**
	 * Date and time at which the reservation expires.
	 */
	public string $expiryDateTime;

	/**
	 * This field specifies the connector type.
	 */
	public null|string|Connector $connectorType;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public object $idToken;

	/**
	 * This contains ID of the evse to be reserved.
	 */
	public ?int $evseId;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?object $groupIdToken;
}
