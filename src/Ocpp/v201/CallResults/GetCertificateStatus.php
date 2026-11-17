<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GetCertificateStatus as GetCertificateStatusEnum;

class GetCertificateStatus extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * This indicates whether the charging station was able to retrieve the OCSP certificate status.
	 */
	public string|GetCertificateStatusEnum $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/**
	 * OCSPResponse class as defined in <<ref-ocpp_security_24, IETF RFC 6960>>. DER encoded (as defined in <<ref-ocpp_security_24, IETF RFC 6960>>), and then base64 encoded. MAY only be omitted when status is not Accepted.
	 */
	public ?string $ocspResult = null;
}
