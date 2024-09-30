<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class RequestStopTransaction
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Status indicating whether Charging Station accepts the request to stop a transaction.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\RequestStartStopStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
