<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class UnlockConnector
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the identifier of the EVSE for which a connector needs to be unlocked.
	 */
	public int $evseId;

	/**
	 * This contains the identifier of the connector that needs to be unlocked.
	 */
	public int $connectorId;
}
