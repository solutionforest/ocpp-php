<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ChargingProfilePurposeType field of a value in ClearChargingProfile , RemoteStartTransaction , SetChargingProfile.
 */
enum ChargingProfilePurposeType: string
{
	case ChargePointMaxProfile = 'ChargePointMaxProfile';
	case TxDefaultProfile = 'TxDefaultProfile';
	case TxProfile = 'TxProfile';
}
