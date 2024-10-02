<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v201\Enums\DataTransferStatus;

class DataTransfer extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates the success or failure of the data transfer.
	 */
	public string|DataTransferStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
	public mixed $data = null;
}
