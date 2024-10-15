<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\CertificateSignedStatus;

class CertificateSigned extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Returns whether certificate signing has been accepted, otherwise rejected.
	 */
	public string|CertificateSignedStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
