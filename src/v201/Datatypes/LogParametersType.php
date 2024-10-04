<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

class LogParametersType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Log. Remote_ Location. URI
	 * urn:x-enexis:ecdm:uid:1:569484
	 * The URL of the location at the remote system where the log should be stored.
	 */
	public string $remoteLocation;

	/**
	 * Log. Oldest_ Timestamp. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569477
	 * This contains the date and time of the oldest logging information to include in the diagnostics.
	 */
	public ?string $oldestTimestamp = null;

	/**
	 * Log. Latest_ Timestamp. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569482
	 * This contains the date and time of the latest logging information to include in the diagnostics.
	 */
	public ?string $latestTimestamp = null;
}
