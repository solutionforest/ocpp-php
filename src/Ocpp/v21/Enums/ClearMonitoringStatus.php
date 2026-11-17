<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ClearMonitoringStatus field of a value in ClearVariableMonitoringResponse.
 */
enum ClearMonitoringStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotFound = 'NotFound';
}
