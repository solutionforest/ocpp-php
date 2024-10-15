<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the CostKind field of a value in NotifyChargingLimitRequest , NotifyEVChargingScheduleRequest , ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum CostKind: string
{
	case CarbonDioxideEmission = 'CarbonDioxideEmission';
	case RelativePricePercentage = 'RelativePricePercentage';
	case RenewableGenerationPercentage = 'RenewableGenerationPercentage';
}
