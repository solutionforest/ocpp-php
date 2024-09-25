<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetBaseReport
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates whether the Charging Station is able to accept this request.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
