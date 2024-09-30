<?php

namespace SolutionForest\OocpPhp\v201\Calls;

class SetMonitoringBase
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Specify which monitoring base will be set
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\MonitoringBase $monitoringBase;
}
