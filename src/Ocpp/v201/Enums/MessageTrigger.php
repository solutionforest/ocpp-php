<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

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
	case StatusNotification = 'StatusNotification';
	case TransactionEvent = 'TransactionEvent';
	case SignCombinedCertificate = 'SignCombinedCertificate';
	case PublishFirmwareStatusNotification = 'PublishFirmwareStatusNotification';
}
