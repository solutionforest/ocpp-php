<?php

/**
 * Values of the MessageTriggerType field of a value in ExtendedTriggerMessage.
 */
enum MessageTriggerType
{
	case BootNotification;
	case LogStatusNotification;
	case FirmwareStatusNotification;
	case Heartbeat;
	case MeterValues;
	case SignChargePointCertificate;
	case StatusNotification;
}
