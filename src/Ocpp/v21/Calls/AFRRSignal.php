<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class AFRRSignal extends Call
{
	/**
	 * Time when signal becomes active.
	 */
	public string $timestamp;

	/**
	 * Value of signal in _v2xSignalWattCurve_.
	 */
	public int $signal;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
