<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GenericDeviceModelStatus;

class GetBaseReport extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This indicates whether the Charging Station is able to accept this request.
	 */
	public string|GenericDeviceModelStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
