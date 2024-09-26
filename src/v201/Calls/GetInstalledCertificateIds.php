<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class GetInstalledCertificateIds
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates the type of certificates requested. When omitted, all certificate types are requested.
	 */
	public ?array $certificateType = null;
}
