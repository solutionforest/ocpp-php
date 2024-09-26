<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class GetCertificateStatus
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates whether the charging station was able to retrieve the OCSP certificate status.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\GetCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * OCSPResponse class as defined in <<ref-ocpp_security_24, IETF RFC 6960>>. DER encoded (as defined in <<ref-ocpp_security_24, IETF RFC 6960>>), and then base64 encoded. MAY only be omitted when status is not Accepted.
	 */
	public ?string $ocspResult = null;
}
