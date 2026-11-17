<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the Reason field of a value in StopTransaction.
 */
enum Reason: string
{
	case EmergencyStop = 'EmergencyStop';
	case EVDisconnected = 'EVDisconnected';
	case HardReset = 'HardReset';
	case Local = 'Local';
	case Other = 'Other';
	case PowerLoss = 'PowerLoss';
	case Reboot = 'Reboot';
	case Remote = 'Remote';
	case SoftReset = 'SoftReset';
	case UnlockCommand = 'UnlockCommand';
	case DeAuthorized = 'DeAuthorized';
}
