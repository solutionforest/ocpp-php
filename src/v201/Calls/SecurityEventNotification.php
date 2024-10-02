<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Call;

class SecurityEventNotification extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Type of the security event. This value should be taken from the Security events list.
	 */
	public string $type;

	/**
	 * Date and time at which the event occurred.
	 */
	public string $timestamp;

	/**
	 * Additional information about the occurred security event.
	 */
	public ?string $techInfo = null;
}
