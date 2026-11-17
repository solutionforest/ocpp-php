<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\EVSEType;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\MessageTrigger;

class TriggerMessage extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * EVSE
	 * urn:x-oca:ocpp:uid:2:233123
	 * Electric Vehicle Supply Equipment
	 */
	public ?EVSEType $evse = null;

	/**
	 * Type of message to be triggered.
	 */
	public string|MessageTrigger $requestedMessage;
}
