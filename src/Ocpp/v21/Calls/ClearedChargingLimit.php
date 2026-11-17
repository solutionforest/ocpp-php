<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class ClearedChargingLimit extends Call
{
	/**
	 * Source of the charging limit. Allowed values defined in Appendix as ChargingLimitSourceEnumStringType.
	 */
	public string $chargingLimitSource;

	/**
	 * EVSE Identifier.
	 */
	public ?int $evseId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
