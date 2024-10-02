<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\MessagePriority;
use SolutionForest\OocpPhp\v201\Enums\MessageState;

class MessageInfoType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * A physical or logical component
	 */
	public ?array $display = null;

	/**
	 * Identified_ Object. MRID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:569198
	 * Master resource identifier, unique within an exchange context. It is defined within the OCPP context as a positive Integer value (greater or equal to zero).
	 */
	public int $id;

	/**
	 * Message_ Info. Priority. Message_ Priority_ Code
	 * urn:x-enexis:ecdm:uid:1:569253
	 * With what priority should this message be shown
	 */
	public string|MessagePriority $priority;

	/**
	 * Message_ Info. State. Message_ State_ Code
	 * urn:x-enexis:ecdm:uid:1:569254
	 * During what state should this message be shown. When omitted this message should be shown in any state of the Charging Station.
	 */
	public null|string|MessageState $state = null;

	/**
	 * Message_ Info. Start. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569256
	 * From what date-time should this message be shown. If omitted: directly.
	 */
	public ?string $startDateTime = null;

	/**
	 * Message_ Info. End. Date_ Time
	 * urn:x-enexis:ecdm:uid:1:569257
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
	 * Message_ Content
	 * urn:x-enexis:ecdm:uid:2:234490
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public array $message;
}
