<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v201\Enums\ClearCacheStatus;

class ClearCache extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Accepted if the Charging Station has executed the request, otherwise rejected.
	 */
	public string|ClearCacheStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
