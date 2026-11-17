<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class UnpublishFirmware extends Call
{
	/**
	 * The MD5 checksum over the entire firmware file as a hexadecimal string of length 32.
	 */
	public string $checksum;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
