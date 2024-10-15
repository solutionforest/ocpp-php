<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\RequestStartStopStatus;

class RequestStopTransaction extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Status indicating whether Charging Station accepts the request to stop a transaction.
	 */
	public string|RequestStartStopStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
