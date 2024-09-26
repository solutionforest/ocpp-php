<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class RequestStopTransaction
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The identifier of the transaction which the Charging Station is requested to stop.
	 */
	public string $transactionId;
}
