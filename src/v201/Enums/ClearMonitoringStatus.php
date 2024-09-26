<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the ClearMonitoringStatus field of a value in ClearVariableMonitoringResponse.
 */
enum ClearMonitoringStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotFound = 'NotFound';
}
