<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\GetCertificateIdUse;

class CertificateHashDataChainType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public array $certificateHashData;

	/**
	 * Indicates the type of the requested certificate(s).
	 */
	public string|GetCertificateIdUse $certificateType;
	public ?array $childCertificateHashData = null;
}
