<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class Heartbeat
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Contains the current time of the CSMS.
	 */
	public string $currentTime;
}
