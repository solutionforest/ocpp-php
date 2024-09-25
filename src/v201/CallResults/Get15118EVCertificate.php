<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class Get15118EVCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates whether the message was processed properly.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * Raw CertificateInstallationRes response for the EV, Base64 encoded.
	 */
	public string $exiResponse;
}
