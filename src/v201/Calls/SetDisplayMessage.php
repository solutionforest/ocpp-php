<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SetDisplayMessage extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Message_ Info
	 * urn:x-enexis:ecdm:uid:2:233264
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public array $message;
}
