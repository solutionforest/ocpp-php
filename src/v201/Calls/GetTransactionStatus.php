<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class GetTransactionStatus
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The Id of the transaction for which the status is requested.
	 */
	public ?string $transactionId = null;
}
