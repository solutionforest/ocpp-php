<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ClearChargingProfileStatus field of a value in ClearChargingProfileResponse.
 */
enum ClearChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case Unknown = 'Unknown';
}
