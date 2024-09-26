<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the GetChargingProfileStatus field of a value in GetChargingProfilesResponse.
 */
enum GetChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case NoProfiles = 'NoProfiles';
}
