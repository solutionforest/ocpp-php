<?php

namespace SolutionForest\OocpPhp\v201\Calls;

class DataTransfer
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * May be used to indicate a specific message or implementation.
	 */
	public ?string $messageId = null;
	public mixed $data = null;

	/**
	 * This identifies the Vendor specific implementation
	 */
	public string $vendorId;
}
