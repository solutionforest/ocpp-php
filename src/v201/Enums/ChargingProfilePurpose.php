<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the ChargingProfilePurpose field of a value in ClearChargingProfileRequest , GetChargingProfilesRequest , ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest.
 */
enum ChargingProfilePurpose: string
{
	case ChargingStationExternalConstraints = 'ChargingStationExternalConstraints';
	case ChargingStationMaxProfile = 'ChargingStationMaxProfile';
	case TxDefaultProfile = 'TxDefaultProfile';
	case TxProfile = 'TxProfile';
}
