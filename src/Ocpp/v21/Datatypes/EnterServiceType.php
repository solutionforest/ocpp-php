<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class EnterServiceType extends Datatype
{
	/**
	 * Priority of setting (0=highest)
	 */
	public int $priority;

	/**
	 * Enter service voltage high
	 */
	public float $highVoltage;

	/**
	 * Enter service voltage low
	 */
	public float $lowVoltage;

	/**
	 * Enter service frequency high
	 */
	public float $highFreq;

	/**
	 * Enter service frequency low
	 */
	public float $lowFreq;

	/**
	 * Enter service delay
	 */
	public ?float $delay = null;

	/**
	 * Enter service randomized delay
	 */
	public ?float $randomDelay = null;

	/**
	 * Enter service ramp rate in seconds
	 */
	public ?float $rampRate = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
