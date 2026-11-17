<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EVSEType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\MessageTrigger;

class TriggerMessage extends Call
{
	/**
	 * Electric Vehicle Supply Equipment
	 */
	public ?EVSEType $evse = null;

	/**
	 * Type of message to be triggered.
	 */
	public string|MessageTrigger $requestedMessage;

	/**
	 * *(2.1)* When _requestedMessage_ = `CustomTrigger` this will trigger sending the corresponding message in field _customTrigger_, if supported by Charging Station.
	 */
	public ?string $customTrigger = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
