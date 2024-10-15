<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the ChargingLimitSource field of a value in ClearedChargingLimitRequest , GetChargingProfilesRequest , NotifyChargingLimitRequest , ReportChargingProfilesRequest.
 */
enum ChargingLimitSource: string
{
	case EMS = 'EMS';
	case Other = 'Other';
	case SO = 'SO';
	case CSO = 'CSO';
}
