<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EventDataType;

class NotifyEvent extends Call
{
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

	/** @var list<EventDataType> */
	#[ListOf(EventDataType::class)]
	public array $eventData;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
