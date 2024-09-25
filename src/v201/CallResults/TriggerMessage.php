<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class TriggerMessage
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates whether the Charging Station will send the requested notification or not.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
