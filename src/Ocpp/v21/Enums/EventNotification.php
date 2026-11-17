<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the EventNotification field of a value in NotifyEventRequest , NotifyMonitoringReportRequest.
 */
enum EventNotification: string
{
	case HardWiredNotification = 'HardWiredNotification';
	case HardWiredMonitor = 'HardWiredMonitor';
	case PreconfiguredMonitor = 'PreconfiguredMonitor';
	case CustomMonitor = 'CustomMonitor';
}
