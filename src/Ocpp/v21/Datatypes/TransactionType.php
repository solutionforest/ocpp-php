<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingState;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OperationMode;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Reason;

class TransactionType extends Datatype
{
	/**
	 * This contains the Id of the transaction.
	 */
	public string $transactionId;

	/**
	 * Current charging state, is required when state
	 * has changed. Omitted when there is no communication between EVSE and EV, because no cable is plugged in.
	 */
	public null|string|ChargingState $chargingState = null;

	/**
	 * Contains the total time that energy flowed from EVSE to EV during the transaction (in seconds). Note that timeSpentCharging is smaller or equal to the duration of the transaction.
	 */
	public ?int $timeSpentCharging = null;

	/**
	 * The _stoppedReason_ is the reason/event that initiated the process of stopping the transaction. It will normally be the user stopping authorization via card (Local or MasterPass) or app (Remote), but it can also be CSMS revoking authorization (DeAuthorized), or disconnecting the EV when TxStopPoint = EVConnected (EVDisconnected). Most other reasons are related to technical faults or energy limitations. +
	 * MAY only be omitted when _stoppedReason_ is "Local"
	 */
	public null|string|Reason $stoppedReason = null;

	/**
	 * The ID given to remote start request (<<requeststarttransactionrequest, RequestStartTransactionRequest>>. This enables to CSMS to match the started transaction to the given start request.
	 */
	public ?int $remoteStartId = null;

	/**
	 * *(2.1)* The _operationMode_ that is currently in effect for the transaction.
	 */
	public null|string|OperationMode $operationMode = null;

	/**
	 * *(2.1)* Id of tariff in use for transaction
	 */
	public ?string $tariffId = null;

	/**
	 * Cost, energy, time or SoC limit for a transaction.
	 */
	public ?TransactionLimitType $transactionLimit = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
