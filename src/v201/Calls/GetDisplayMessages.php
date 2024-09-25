<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetDisplayMessages
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * If provided the Charging Station shall return Display Messages of the given ids. This field SHALL NOT contain more ids than set in <<configkey-number-of-display-messages,NumberOfDisplayMessages.maxLimit>>
	 */
	public ?array $id = null;

	/**
	 * The Id of this request.
	 */
	public int $requestId;

	/**
	 * If provided the Charging Station shall return Display Messages with the given priority only.
	 */
	public ?string $priority = null;

	/**
	 * If provided the Charging Station shall return Display Messages with the given state only.
	 */
	public ?string $state = null;
}
