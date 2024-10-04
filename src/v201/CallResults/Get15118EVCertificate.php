<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\Iso15118EVCertificateStatus;

class Get15118EVCertificate extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates whether the message was processed properly.
	 */
	public string|Iso15118EVCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * Raw CertificateInstallationRes response for the EV, Base64 encoded.
	 */
	public string $exiResponse;
}
