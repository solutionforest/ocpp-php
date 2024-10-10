<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Charging Station indicates if it can process the request.
	 */
	public string|GetInstalledCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
	public ?array $certificateHashDataChain;
}
