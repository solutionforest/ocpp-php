<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class GetInstalledCertificateIds extends Call
{
	/**
	 * Indicates the type of certificates requested. When omitted, all certificate types are requested.
	 */
	public ?array $certificateType = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
