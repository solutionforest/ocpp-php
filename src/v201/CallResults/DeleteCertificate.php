<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class DeleteCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Charging Station indicates if it can process the request.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\DeleteCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
