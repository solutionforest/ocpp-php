<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\ChargingState;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\Reason;

class TransactionType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the Id of the transaction.
	 */
	public string $transactionId;

	/**
	 * Transaction. State. Transaction_ State_ Code
	 * urn:x-oca:ocpp:uid:1:569419
	 * Current charging state, is required when state
	 * has changed.
	 */
	public null|string|ChargingState $chargingState = null;

	/**
	 * Transaction. Time_ Spent_ Charging. Elapsed_ Time
	 * urn:x-oca:ocpp:uid:1:569415
	 * Contains the total time that energy flowed from EVSE to EV during the transaction (in seconds). Note that timeSpentCharging is smaller or equal to the duration of the transaction.
	 */
	public ?int $timeSpentCharging = null;

	/**
	 * Transaction. Stopped_ Reason. EOT_ Reason_ Code
	 * urn:x-oca:ocpp:uid:1:569413
	 * This contains the reason why the transaction was stopped. MAY only be omitted when Reason is "Local".
	 */
	public null|string|Reason $stoppedReason = null;

	/**
	 * The ID given to remote start request (<<requeststarttransactionrequest, RequestStartTransactionRequest>>. This enables to CSMS to match the started transaction to the given start request.
	 */
	public ?int $remoteStartId = null;
}
