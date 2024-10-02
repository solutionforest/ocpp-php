<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v201\Enums\CustomerInformationStatus;

class CustomerInformation extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates whether the request was accepted.
	 */
	public string|CustomerInformationStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
