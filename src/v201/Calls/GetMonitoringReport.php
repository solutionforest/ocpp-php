<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetMonitoringReport
{
	public ?array $componentVariable = null;
	public int $requestId;
	public ?array $monitoringCriteria = null;
}
