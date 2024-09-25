<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ChargingProfileStatus field of a value in SetChargingProfileResponse.
 */
enum ChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
