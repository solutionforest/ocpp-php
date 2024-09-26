<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class SetDisplayMessage
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates whether the Charging Station is able to display the message.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\DisplayMessageStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
