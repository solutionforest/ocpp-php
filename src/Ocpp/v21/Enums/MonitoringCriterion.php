<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MonitoringCriterion field of a value in GetMonitoringReportRequest.
 */
enum MonitoringCriterion: string
{
	case ThresholdMonitoring = 'ThresholdMonitoring';
	case DeltaMonitoring = 'DeltaMonitoring';
	case PeriodicMonitoring = 'PeriodicMonitoring';
}
