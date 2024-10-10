<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class RequestStartTransaction extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Number of the EVSE on which to start the transaction. EvseId SHALL be > 0
	 */
	public ?int $evseId;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?object $groupIdToken;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public object $idToken;

	/**
	 * Id given by the server to this start request. The Charging Station might return this in the <<transactioneventrequest, TransactionEventRequest>>, letting the server know which transaction was started for this request. Use to start a transaction.
	 */
	public int $remoteStartId;

	/**
	 * Charging_ Profile
	 * urn:x-oca:ocpp:uid:2:233255
	 * A ChargingProfile consists of ChargingSchedule, describing the amount of power or current that can be delivered per time interval.
	 */
	public ?object $chargingProfile;
}
