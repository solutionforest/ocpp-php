<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\InstallCertificateUse;

class InstallCertificate extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Indicates the certificate type that is sent.
	 */
	public string|InstallCertificateUse $certificateType;

	/**
	 * A PEM encoded X.509 certificate.
	 */
	public string $certificate;
}
