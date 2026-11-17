<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyPriorityCharging extends Call
{
	/**
	 * The transaction for which priority charging is requested.
	 */
	public string $transactionId;

	/**
	 * True if priority charging was activated. False if it has stopped using the priority charging profile.
	 */
	public bool $activated;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
