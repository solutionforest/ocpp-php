<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\OCSPRequestDataType;

class GetCertificateStatus extends Call
{
	/**
	 * Information about a certificate for an OCSP check.
	 */
	public OCSPRequestDataType $ocspRequestData;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
