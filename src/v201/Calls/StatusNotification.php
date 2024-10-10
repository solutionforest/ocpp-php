<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\ConnectorStatus;

class StatusNotification extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The time for which the status is reported. If absent time of receipt of the message will be assumed.
	 */
	public string $timestamp;

	/**
	 * This contains the current status of the Connector.
	 */
	public string|ConnectorStatus $connectorStatus;

	/**
	 * The id of the EVSE to which the connector belongs for which the the status is reported.
	 */
	public int $evseId;

	/**
	 * The id of the connector within the EVSE for which the status is reported.
	 */
	public int $connectorId;
}
