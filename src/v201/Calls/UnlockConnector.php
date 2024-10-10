<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class UnlockConnector extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This contains the identifier of the EVSE for which a connector needs to be unlocked.
	 */
	public int $evseId;

	/**
	 * This contains the identifier of the connector that needs to be unlocked.
	 */
	public int $connectorId;
}
