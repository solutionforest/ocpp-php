<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class InstallCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates the certificate type that is sent.
	 */
	public string $certificateType;

	/**
	 * A PEM encoded X.509 certificate.
	 */
	public string $certificate;
}
