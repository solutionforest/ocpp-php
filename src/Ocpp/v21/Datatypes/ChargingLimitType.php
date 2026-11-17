<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ChargingLimitType extends Datatype
{
	/**
	 * Represents the source of the charging limit. Values defined in appendix as ChargingLimitSourceEnumStringType.
	 */
	public string $chargingLimitSource;

	/**
	 * *(2.1)* True when the reported limit concerns local generation that is providing extra capacity, instead of a limitation.
	 */
	public ?bool $isLocalGeneration = null;

	/**
	 * Indicates whether the charging limit is critical for the grid.
	 */
	public ?bool $isGridCritical = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
