<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\GetCertificateStatus;

class GetCertificateStatus extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This indicates whether the charging station was able to retrieve the OCSP certificate status.
	 */
	public string|GetCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;

	/**
	 * OCSPResponse class as defined in <<ref-ocpp_security_24, IETF RFC 6960>>. DER encoded (as defined in <<ref-ocpp_security_24, IETF RFC 6960>>), and then base64 encoded. MAY only be omitted when status is not Accepted.
	 */
	public ?string $ocspResult;
}
