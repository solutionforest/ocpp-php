<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v201\Enums\Log;

class GetLog extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Log
	 * urn:x-enexis:ecdm:uid:2:233373
	 * Generic class for the configuration of logging entries.
	 */
	public array $log;

	/**
	 * This contains the type of log file that the Charging Station
	 * should send.
	 */
	public string|Log $logType;

	/**
	 * The Id of this request
	 */
	public int $requestId;

	/**
	 * This specifies how many times the Charging Station must try to upload the log before giving up. If this field is not present, it is left to Charging Station to decide how many times it wants to retry.
	 */
	public ?int $retries = null;

	/**
	 * The interval in seconds after which a retry may be attempted. If this field is not present, it is left to Charging Station to decide how long to wait between attempts.
	 */
	public ?int $retryInterval = null;
}
