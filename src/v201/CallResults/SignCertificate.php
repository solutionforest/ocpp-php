<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class SignCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Specifies whether the CSMS can process the request.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\GenericStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
