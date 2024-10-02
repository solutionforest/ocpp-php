<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v201\Enums\MonitoringBase;

class SetMonitoringBase extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Specify which monitoring base will be set
	 */
	public string|MonitoringBase $monitoringBase;
}
