<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class GetLocalListVersion
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the current version number of the local authorization list in the Charging Station.
	 */
	public int $versionNumber;
}
