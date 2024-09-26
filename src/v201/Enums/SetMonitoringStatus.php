<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the SetMonitoringStatus field of a value in SetVariableMonitoringResponse.
 */
enum SetMonitoringStatus: string
{
	case Accepted = 'Accepted';
	case UnknownComponent = 'UnknownComponent';
	case UnknownVariable = 'UnknownVariable';
	case UnsupportedMonitorType = 'UnsupportedMonitorType';
	case Rejected = 'Rejected';
	case Duplicate = 'Duplicate';
}
