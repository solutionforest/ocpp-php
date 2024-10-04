<?php

namespace SolutionForest\OcppPhp\v16\Enums;

/**
 * Values of the MessageTrigger field of a value in ExtendedTriggerMessage.
 */
enum MessageTrigger: string
{
	case BootNotification = 'BootNotification';
	case LogStatusNotification = 'LogStatusNotification';
	case FirmwareStatusNotification = 'FirmwareStatusNotification';
	case Heartbeat = 'Heartbeat';
	case MeterValues = 'MeterValues';
	case SignChargePointCertificate = 'SignChargePointCertificate';
	case StatusNotification = 'StatusNotification';
}
