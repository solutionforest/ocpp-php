<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the ChargingProfileStatus field of a value in SetChargingProfileResponse.
 */
enum ChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
