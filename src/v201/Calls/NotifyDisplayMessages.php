<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class NotifyDisplayMessages extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;
	public ?array $messageInfo;

	/**
	 * The id of the <<getdisplaymessagesrequest,GetDisplayMessagesRequest>> that requested this message.
	 */
	public int $requestId;

	/**
	 * "to be continued" indicator. Indicates whether another part of the report follows in an upcoming NotifyDisplayMessagesRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc;
}
