<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingProfileType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;

class RequestStartTransaction extends Call
{
	/**
	 * Number of the EVSE on which to start the transaction. EvseId SHALL be > 0
	 */
	public ?int $evseId = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?IdTokenType $groupIdToken = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * Id given by the server to this start request. The Charging Station will return this in the <<transactioneventrequest, TransactionEventRequest>>, letting the server know which transaction was started for this request. Use to start a transaction.
	 */
	public int $remoteStartId;

	/**
	 * A ChargingProfile consists of 1 to 3 ChargingSchedules with a list of ChargingSchedulePeriods, describing the amount of power or current that can be delivered per time interval.
	 *
	 * image::images/ChargingProfile-Simple.png[]
	 */
	public ?ChargingProfileType $chargingProfile = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
