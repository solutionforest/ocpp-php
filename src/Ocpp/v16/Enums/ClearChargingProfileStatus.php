<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ClearChargingProfileStatus field of a value in ClearChargingProfileResponse.
 */
enum ClearChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case Unknown = 'Unknown';
}
