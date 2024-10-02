<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class PublishFirmware extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains a string containing a URI pointing to a
	 * location from which to retrieve the firmware.
	 */
	public string $location;

	/**
	 * This specifies how many times Charging Station must try
	 * to download the firmware before giving up. If this field is not
	 * present, it is left to Charging Station to decide how many times it wants to retry.
	 */
	public ?int $retries = null;

	/**
	 * The MD5 checksum over the entire firmware file as a hexadecimal string of length 32.
	 */
	public string $checksum;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * The interval in seconds
	 * after which a retry may be
	 * attempted. If this field is not
	 * present, it is left to Charging
	 * Station to decide how long to wait
	 * between attempts.
	 */
	public ?int $retryInterval = null;
}
