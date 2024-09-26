<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class ClearCache
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Accepted if the Charging Station has executed the request, otherwise rejected.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\ClearCacheStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
