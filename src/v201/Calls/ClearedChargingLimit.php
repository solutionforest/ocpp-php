<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\ChargingLimitSource;

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
