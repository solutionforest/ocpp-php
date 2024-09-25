<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the EventNotification field of a value in NotifyEventRequest.
 */
enum EventNotification: string
{
	case HardWiredNotification = 'HardWiredNotification';
	case HardWiredMonitor = 'HardWiredMonitor';
	case PreconfiguredMonitor = 'PreconfiguredMonitor';
	case CustomMonitor = 'CustomMonitor';
}
