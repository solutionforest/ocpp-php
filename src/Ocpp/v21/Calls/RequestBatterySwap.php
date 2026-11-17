<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;

class RequestBatterySwap extends Call
{
	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * Request id to match with BatterySwapRequest.
	 */
	public int $requestId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
