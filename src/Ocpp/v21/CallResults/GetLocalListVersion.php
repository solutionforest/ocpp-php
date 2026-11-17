<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class GetLocalListVersion extends CallResult
{
	/**
	 * This contains the current version number of the local authorization list in the Charging Station.
	 */
	public int $versionNumber;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
