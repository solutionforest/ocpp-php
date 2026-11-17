<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\CertificateStatusSource;

class CertificateStatusRequestInfoType extends Datatype
{
	public CertificateHashDataType $certificateHashData;

	/**
	 * Source of status: OCSP, CRL
	 */
	public string|CertificateStatusSource $source;

	/**
	 * URL(s) of _source_.
	 */
	public array $urls;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
