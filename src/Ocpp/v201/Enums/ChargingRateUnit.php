<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the ChargingRateUnit field of a value in GetCompositeScheduleRequest , GetCompositeScheduleResponse , NotifyChargingLimitRequest , NotifyEVChargingScheduleRequest , ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum ChargingRateUnit: string
{
	case W = 'W';
	case A = 'A';
}
