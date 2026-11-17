<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EVSEType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OperationalStatus;

class ChangeAvailability extends Call
{
	/**
	 * Electric Vehicle Supply Equipment
	 */
	public ?EVSEType $evse = null;

	/**
	 * This contains the type of availability change that the Charging Station should perform.
	 */
	public string|OperationalStatus $operationalStatus;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
