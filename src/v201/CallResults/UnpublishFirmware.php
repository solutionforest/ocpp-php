<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class UnpublishFirmware
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates whether the Local Controller succeeded in unpublishing the firmware.
	 */
	public string $status;
}
