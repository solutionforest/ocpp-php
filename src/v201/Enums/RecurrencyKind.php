<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the RecurrencyKind field of a value in ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum RecurrencyKind: string
{
	case Daily = 'Daily';
	case Weekly = 'Weekly';
}
