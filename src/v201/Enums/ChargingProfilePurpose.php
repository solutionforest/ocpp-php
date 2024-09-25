<?php

namespace SolutionForest\OocpPhp\Enums;

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
