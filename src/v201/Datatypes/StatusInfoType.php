<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class StatusInfoType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * A predefined code for the reason why the status is returned in this response. The string is case-insensitive.
	 */
	public string $reasonCode;

	/**
	 * Additional text to provide detailed information.
	 */
	public ?string $additionalInfo = null;
}
