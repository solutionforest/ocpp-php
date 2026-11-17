<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class StatusInfoType extends Datatype
{
	/**
	 * A predefined code for the reason why the status is returned in this response. The string is case-insensitive.
	 */
	public string $reasonCode;

	/**
	 * Additional text to provide detailed information.
	 */
	public ?string $additionalInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
