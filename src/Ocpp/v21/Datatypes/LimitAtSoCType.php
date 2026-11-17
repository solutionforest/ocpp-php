<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class LimitAtSoCType extends Datatype
{
	/**
	 * The SoC value beyond which the charging rate limit should be applied.
	 */
	public int $soc;

	/**
	 * Charging rate limit beyond the SoC value.
	 * The unit is defined by _chargingSchedule.chargingRateUnit_.
	 */
	public float $limit;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
