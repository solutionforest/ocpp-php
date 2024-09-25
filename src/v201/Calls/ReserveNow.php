<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ReserveNow
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

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
	public ?string $connectorType = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public array $idToken;

	/**
	 * This contains ID of the evse to be reserved.
	 */
	public ?int $evseId = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?array $groupIdToken = null;
}
