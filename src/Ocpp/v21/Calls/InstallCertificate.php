<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\InstallCertificateUse;

class InstallCertificate extends Call
{
	/**
	 * Indicates the certificate type that is sent.
	 */
	public string|InstallCertificateUse $certificateType;

	/**
	 * A PEM encoded X.509 certificate.
	 */
	public string $certificate;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
