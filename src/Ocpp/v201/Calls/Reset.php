<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\Reset as ResetEnum;

class Reset extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This contains the type of reset that the Charging Station or EVSE should perform.
	 */
	public string|ResetEnum $type;

	/**
	 * This contains the ID of a specific EVSE that needs to be reset, instead of the entire Charging Station.
	 */
	public ?int $evseId;
}
