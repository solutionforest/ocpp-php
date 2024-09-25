<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ChargingRateUnit field of a value in GetCompositeScheduleRequest , GetCompositeScheduleResponse , NotifyChargingLimitRequest , NotifyEVChargingScheduleRequest , ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum ChargingRateUnit: string
{
	case W = 'W';
	case A = 'A';
}
