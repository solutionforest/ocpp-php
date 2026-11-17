<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MessageTrigger field of a value in TriggerMessageRequest.
 */
enum MessageTrigger: string
{
	case BootNotification = 'BootNotification';
	case LogStatusNotification = 'LogStatusNotification';
	case FirmwareStatusNotification = 'FirmwareStatusNotification';
	case Heartbeat = 'Heartbeat';
	case MeterValues = 'MeterValues';
	case SignChargingStationCertificate = 'SignChargingStationCertificate';
	case SignV2GCertificate = 'SignV2GCertificate';
	case SignV2G20Certificate = 'SignV2G20Certificate';
	case StatusNotification = 'StatusNotification';
	case TransactionEvent = 'TransactionEvent';
	case SignCombinedCertificate = 'SignCombinedCertificate';
	case PublishFirmwareStatusNotification = 'PublishFirmwareStatusNotification';
	case CustomTrigger = 'CustomTrigger';
}
