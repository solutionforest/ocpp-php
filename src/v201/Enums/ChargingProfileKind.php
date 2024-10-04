<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ChargingProfileKind field of a value in ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum ChargingProfileKind: string
{
	case Absolute = 'Absolute';
	case Recurring = 'Recurring';
	case Relative = 'Relative';
}
