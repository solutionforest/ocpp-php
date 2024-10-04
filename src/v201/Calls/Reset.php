<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\Reset;

class Reset extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the type of reset that the Charging Station or EVSE should perform.
	 */
	public string|Reset $type;

	/**
	 * This contains the ID of a specific EVSE that needs to be reset, instead of the entire Charging Station.
	 */
	public ?int $evseId = null;
}
