<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class AdditionalInfoType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This field specifies the additional IdToken.
	 */
	public ?string $additionalIdToken = null;

	/**
	 * This defines the type of the additionalIdToken. This is a custom type, so the implementation needs to be agreed upon by all involved parties.
	 */
	public ?string $type = null;
}
