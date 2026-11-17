<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERUnit;

class FixedVarType extends Datatype
{
	/**
	 * Priority of setting (0=highest)
	 */
	public int $priority;

	/**
	 * The value specifies a target var output interpreted as a signed percentage (-100 to 100).
	 *     A negative value refers to charging, whereas a positive one refers to discharging.
	 *     The value type is determined by the unit field.
	 */
	public float $setpoint;

	/**
	 * Unit of the setpoint.
	 */
	public string|DERUnit $unit;

	/**
	 * Time when this setting becomes active.
	 */
	public ?string $startTime = null;

	/**
	 * Duration in seconds that this setting is active.
	 */
	public ?float $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
