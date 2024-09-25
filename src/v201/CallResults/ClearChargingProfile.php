<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class ClearChargingProfile
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates if the Charging Station was able to execute the request.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
