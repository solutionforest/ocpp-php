<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class UnlockConnector extends Call
{
	/**
	 * This contains the identifier of the EVSE for which a connector needs to be unlocked.
	 */
	public int $evseId;

	/**
	 * This contains the identifier of the connector that needs to be unlocked.
	 */
	public int $connectorId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
