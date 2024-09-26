<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class InstallCertificate
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Charging Station indicates if installation was successful.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\InstallCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
