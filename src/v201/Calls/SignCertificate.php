<?php

namespace SolutionForest\OocpPhp\v201\Calls;

class SignCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The Charging Station SHALL send the public key in form of a Certificate Signing Request (CSR) as described in RFC 2986 [22] and then PEM encoded, using the <<signcertificaterequest,SignCertificateRequest>> message.
	 */
	public string $csr;

	/**
	 * Indicates the type of certificate that is to be signed. When omitted the certificate is to be used for both the 15118 connection (if implemented) and the Charging Station to CSMS connection.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\CertificateSigningUse $certificateType = null;
}
