<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\MessagePriority;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\MessageState;

class MessageInfoType extends Datatype
{
	/**
	 * A physical or logical component
	 */
	public ?ComponentType $display = null;

	/**
	 * Unique id within an exchange context. It is defined within the OCPP context as a positive Integer value (greater or equal to zero).
	 */
	public int $id;

	/**
	 * With what priority should this message be shown
	 */
	public string|MessagePriority $priority;

	/**
	 * During what state should this message be shown. When omitted this message should be shown in any state of the Charging Station.
	 */
	public null|string|MessageState $state = null;

	/**
	 * From what date-time should this message be shown. If omitted: directly.
	 */
	public ?string $startDateTime = null;

	/**
	 * Until what date-time should this message be shown, after this date/time this message SHALL be removed.
	 */
	public ?string $endDateTime = null;

	/**
	 * During which transaction shall this message be shown.
	 * Message SHALL be removed by the Charging Station after transaction has
	 * ended.
	 */
	public ?string $transactionId = null;

	/**
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public MessageContentType $message;

	/** @var list<MessageContentType>|null */
	#[ListOf(MessageContentType::class)]
	public ?array $messageExtra = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
