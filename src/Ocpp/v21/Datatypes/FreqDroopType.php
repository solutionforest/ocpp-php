<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class FreqDroopType extends Datatype
{
	/**
	 * Priority of setting (0=highest)
	 */
	public int $priority;

	/**
	 * Over-frequency start of droop
	 */
	public float $overFreq;

	/**
	 * Under-frequency start of droop
	 */
	public float $underFreq;

	/**
	 * Over-frequency droop per unit, oFDroop
	 */
	public float $overDroop;

	/**
	 * Under-frequency droop per unit, uFDroop
	 */
	public float $underDroop;

	/**
	 * Open loop response time in seconds
	 */
	public float $responseTime;

	/**
	 * Time when this setting becomes active
	 */
	public ?string $startTime = null;

	/**
	 * Duration in seconds that this setting is active
	 */
	public ?float $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
