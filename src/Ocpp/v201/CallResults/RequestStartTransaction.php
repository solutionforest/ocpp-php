<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\RequestStartStopStatus;

class RequestStartTransaction extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Status indicating whether the Charging Station accepts the request to start a transaction.
	 */
	public string|RequestStartStopStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/**
	 * When the transaction was already started by the Charging Station before the RequestStartTransactionRequest was received, for example: cable plugged in first. This contains the transactionId of the already started transaction.
	 */
	public ?string $transactionId = null;
}
