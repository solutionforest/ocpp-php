<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class UpdateFirmware
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This specifies how many times Charging Station must try to download the firmware before giving up. If this field is not present, it is left to Charging Station to decide how many times it wants to retry.
	 */
	public ?int $retries = null;

	/**
	 * The interval in seconds after which a retry may be attempted. If this field is not present, it is left to Charging Station to decide how long to wait between attempts.
	 */
	public ?int $retryInterval = null;

	/**
	 * The Id of this request
	 */
	public int $requestId;

	/**
	 * Firmware
	 * urn:x-enexis:ecdm:uid:2:233291
	 * Represents a copy of the firmware that can be loaded/updated on the Charging Station.
	 */
	public array $firmware;
}
