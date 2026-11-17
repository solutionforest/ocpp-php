<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyDERStartStop extends Call
{
	/**
	 * Id of the started or stopped DER control.
	 * Corresponds to the _controlId_ of the SetDERControlRequest.
	 */
	public string $controlId;

	/**
	 * True if DER control has started. False if it has ended.
	 */
	public bool $started;

	/**
	 * Time of start or end of event.
	 */
	public string $timestamp;

	/**
	 * List of controlIds that are superseded as a result of this control starting.
	 */
	public ?array $supersededIds = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
