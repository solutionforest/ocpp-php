<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\ChargingLimitSource;

class ChargingLimitType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Charging_ Limit. Charging_ Limit_ Source. Charging_ Limit_ Source_ Code
	 * urn:x-enexis:ecdm:uid:1:570845
	 * Represents the source of the charging limit.
	 */
	public string|ChargingLimitSource $chargingLimitSource;

	/**
	 * Charging_ Limit. Is_ Grid_ Critical. Indicator
	 * urn:x-enexis:ecdm:uid:1:570847
	 * Indicates whether the charging limit is critical for the grid.
	 */
	public ?bool $isGridCritical = null;
}
