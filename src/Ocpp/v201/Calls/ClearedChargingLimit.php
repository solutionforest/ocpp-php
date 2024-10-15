<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\ChargingLimitSource;

class ClearedChargingLimit extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Source of the charging limit.
	 */
	public string|ChargingLimitSource $chargingLimitSource;

	/**
	 * EVSE Identifier.
	 */
	public ?int $evseId;
}
