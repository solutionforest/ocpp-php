<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GenericDeviceModelStatus;

class SetMonitoringBase extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Indicates whether the Charging Station was able to accept the request.
	 */
	public string|GenericDeviceModelStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
