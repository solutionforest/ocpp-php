<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ChargingProfileKind field of a value in ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum ChargingProfileKind: string
{
	case Absolute = 'Absolute';
	case Recurring = 'Recurring';
	case Relative = 'Relative';
	case Dynamic = 'Dynamic';
}
