<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class ClearDisplayMessage
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Returns whether the Charging Station has been able to remove the message.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\ClearMessageStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
