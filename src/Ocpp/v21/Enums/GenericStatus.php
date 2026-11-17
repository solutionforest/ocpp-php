<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the GenericStatus field of a value in AFRRSignalResponse , AdjustPeriodicEventStreamResponse , GetCompositeScheduleResponse , NotifyEVChargingScheduleResponse , OpenPeriodicEventStreamResponse , PublishFirmwareResponse , RequestBatterySwapResponse , SetMonitoringLevelResponse , SignCertificateResponse , VatNumberValidationResponse.
 */
enum GenericStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
