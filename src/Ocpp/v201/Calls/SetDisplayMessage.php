<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SetDisplayMessage extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Message_ Info
	 * urn:x-enexis:ecdm:uid:2:233264
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public object $message;
}
