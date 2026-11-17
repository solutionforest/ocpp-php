<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class UsePriorityCharging extends Call
{
	/**
	 * The transaction for which priority charging is requested.
	 */
	public string $transactionId;

	/**
	 * True to request priority charging.
	 * False to request stopping priority charging.
	 */
	public bool $activate;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
