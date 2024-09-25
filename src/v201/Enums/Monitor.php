<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the Monitor field of a value in NotifyMonitoringReportRequest , SetVariableMonitoringRequest , SetVariableMonitoringResponse.
 */
enum Monitor: string
{
	case UpperThreshold = 'UpperThreshold';
	case LowerThreshold = 'LowerThreshold';
	case Delta = 'Delta';
	case Periodic = 'Periodic';
	case PeriodicClockAligned = 'PeriodicClockAligned';
}
