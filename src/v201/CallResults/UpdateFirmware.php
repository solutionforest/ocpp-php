<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class UpdateFirmware
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This field indicates whether the Charging Station was able to accept the request.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\UpdateFirmwareStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
