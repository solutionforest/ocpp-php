<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v201\Enums\MessageTrigger;

class TriggerMessage extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * EVSE
	 * urn:x-oca:ocpp:uid:2:233123
	 * Electric Vehicle Supply Equipment
	 */
	public ?array $evse = null;

	/**
	 * Type of message to be triggered.
	 */
	public string|MessageTrigger $requestedMessage;
}
