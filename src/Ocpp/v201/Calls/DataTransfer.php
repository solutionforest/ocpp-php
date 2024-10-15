<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class DataTransfer extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * May be used to indicate a specific message or implementation.
	 */
	public ?string $messageId;
	public mixed $data;

	/**
	 * This identifies the Vendor specific implementation
	 */
	public string $vendorId;
}
