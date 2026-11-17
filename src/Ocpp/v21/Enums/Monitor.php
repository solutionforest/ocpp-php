<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

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
	case TargetDelta = 'TargetDelta';
	case TargetDeltaRelative = 'TargetDeltaRelative';
}
