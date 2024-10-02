<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v201\Enums\ChargingLimitSource;

class ClearedChargingLimit extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Source of the charging limit.
	 */
	public string|ChargingLimitSource $chargingLimitSource;

	/**
	 * EVSE Identifier.
	 */
	public ?int $evseId = null;
}
