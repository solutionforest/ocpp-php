<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the BootReason field of a value in BootNotificationRequest.
 */
enum BootReason: string
{
	case ApplicationReset = 'ApplicationReset';
	case FirmwareUpdate = 'FirmwareUpdate';
	case LocalReset = 'LocalReset';
	case PowerUp = 'PowerUp';
	case RemoteReset = 'RemoteReset';
	case ScheduledReset = 'ScheduledReset';
	case Triggered = 'Triggered';
	case Unknown = 'Unknown';
	case Watchdog = 'Watchdog';
}
