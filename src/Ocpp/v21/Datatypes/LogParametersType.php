<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class LogParametersType extends Datatype
{
	/**
	 * The URL of the location at the remote system where the log should be stored.
	 */
	public string $remoteLocation;

	/**
	 * This contains the date and time of the oldest logging information to include in the diagnostics.
	 */
	public ?string $oldestTimestamp = null;

	/**
	 * This contains the date and time of the latest logging information to include in the diagnostics.
	 */
	public ?string $latestTimestamp = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
