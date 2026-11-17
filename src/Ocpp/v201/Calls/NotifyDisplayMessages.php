<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\MessageInfoType;

class NotifyDisplayMessages extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<MessageInfoType>|null */
	#[ListOf(MessageInfoType::class)]
	public ?array $messageInfo = null;

	/**
	 * The id of the <<getdisplaymessagesrequest,GetDisplayMessagesRequest>> that requested this message.
	 */
	public int $requestId;

	/**
	 * "to be continued" indicator. Indicates whether another part of the report follows in an upcoming NotifyDisplayMessagesRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc = null;
}
