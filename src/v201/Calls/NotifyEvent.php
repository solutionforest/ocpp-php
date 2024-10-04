<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class NotifyEvent extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Timestamp of the moment this message was generated at the Charging Station.
	 */
	public string $generatedAt;

	/**
	 * “to be continued” indicator. Indicates whether another part of the report follows in an upcoming notifyEventRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc = null;

	/**
	 * Sequence number of this message. First message starts at 0.
	 */
	public int $seqNo;
	public array $eventData;
}
