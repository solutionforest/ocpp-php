<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\BatteryDataType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\BatterySwapEvent;

class BatterySwap extends Call
{
	/** @var list<BatteryDataType> */
	#[ListOf(BatteryDataType::class)]
	public array $batteryData;

	/**
	 * Battery in/out
	 */
	public string|BatterySwapEvent $eventType;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * RequestId to correlate BatteryIn/Out events and optional RequestBatterySwapRequest.
	 */
	public int $requestId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
