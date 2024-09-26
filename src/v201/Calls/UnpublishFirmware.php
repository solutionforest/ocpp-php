<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class UnpublishFirmware
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The MD5 checksum over the entire firmware file as a hexadecimal string of length 32.
	 */
	public string $checksum;
}
