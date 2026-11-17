<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ResetStatus;

class Reset extends CallResult
{
	/**
	 * This indicates whether the Charging Station is able to perform the reset.
	 */
	public string|ResetStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
