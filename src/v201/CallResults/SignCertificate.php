<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\GenericStatus;

class SignCertificate extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Specifies whether the CSMS can process the request.
	 */
	public string|GenericStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
