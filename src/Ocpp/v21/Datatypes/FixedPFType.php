<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class FixedPFType extends Datatype
{
	/**
	 * Priority of setting (0=highest)
	 */
	public int $priority;

	/**
	 * Power factor, cos(phi), as value between 0..1.
	 */
	public float $displacement;

	/**
	 * True when absorbing reactive power (under-excited), false when injecting reactive power (over-excited).
	 */
	public bool $excitation;

	/**
	 * Time when this setting becomes active
	 */
	public ?string $startTime = null;

	/**
	 * Duration in seconds that this setting is active.
	 */
	public ?float $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
