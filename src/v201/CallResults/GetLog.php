<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetLog
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This field indicates whether the Charging Station was able to accept the request.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * This contains the name of the log file that will be uploaded. This field is not present when no logging information is available.
	 */
	public ?string $filename = null;
}
