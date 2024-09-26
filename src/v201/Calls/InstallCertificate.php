<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class InstallCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates the certificate type that is sent.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\InstallCertificateUse $certificateType;

	/**
	 * A PEM encoded X.509 certificate.
	 */
	public string $certificate;
}
