<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class SetNetworkProfile
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Result of operation.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\SetNetworkProfileStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
