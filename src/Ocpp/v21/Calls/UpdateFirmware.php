<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FirmwareType;

class UpdateFirmware extends Call
{
	/**
	 * This specifies how many times Charging Station must retry to download the firmware before giving up. If this field is not present, it is left to Charging Station to decide how many times it wants to retry.
	 * If the value is 0, it means: no retries.
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
	 * Represents a copy of the firmware that can be loaded/updated on the Charging Station.
	 */
	public FirmwareType $firmware;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
