<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\CertificateSigningUse;

class CertificateSigned extends Call
{
	/**
	 * The signed PEM encoded X.509 certificate. This SHALL also contain the necessary sub CA certificates, when applicable. The order of the bundle follows the certificate chain, starting from the leaf certificate.
	 *
	 * The Configuration Variable <<configkey-max-certificate-chain-size,MaxCertificateChainSize>> can be used to limit the maximum size of this field.
	 */
	public string $certificateChain;

	/**
	 * Indicates the type of the signed certificate that is returned. When omitted the certificate is used for both the 15118 connection (if implemented) and the Charging Station to CSMS connection. This field is required when a typeOfCertificate was included in the <<signcertificaterequest,SignCertificateRequest>> that requested this certificate to be signed AND both the 15118 connection and the Charging Station connection are implemented.
	 */
	public null|string|CertificateSigningUse $certificateType = null;

	/**
	 * *(2.1)* RequestId to correlate this message with the SignCertificateRequest.
	 */
	public ?int $requestId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
