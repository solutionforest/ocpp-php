<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\MessagePriority;
use SolutionForest\OcppPhp\v201\Enums\MessageState;

class GetDisplayMessages extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * If provided the Charging Station shall return Display Messages of the given ids. This field SHALL NOT contain more ids than set in <<configkey-number-of-display-messages,NumberOfDisplayMessages.maxLimit>>
	 */
	public ?array $id;

	/**
	 * The Id of this request.
	 */
	public int $requestId;

	/**
	 * If provided the Charging Station shall return Display Messages with the given priority only.
	 */
	public null|string|MessagePriority $priority;

	/**
	 * If provided the Charging Station shall return Display Messages with the given state only.
	 */
	public null|string|MessageState $state;
}
