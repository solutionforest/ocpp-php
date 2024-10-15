<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class GetTransactionStatus extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Whether the transaction is still ongoing.
	 */
	public ?bool $ongoingIndicator;

	/**
	 * Whether there are still message to be delivered.
	 */
	public bool $messagesInQueue;
}
