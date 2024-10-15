<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\LogStatus;

class GetLog extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This field indicates whether the Charging Station was able to accept the request.
	 */
	public string|LogStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;

	/**
	 * This contains the name of the log file that will be uploaded. This field is not present when no logging information is available.
	 */
	public ?string $filename;
}
