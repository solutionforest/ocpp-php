<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class CertificateSigned
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Returns whether certificate signing has been accepted, otherwise rejected.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\CertificateSignedStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
