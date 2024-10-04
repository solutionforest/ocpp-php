<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ChangeAvailabilityStatus field of a value in ChangeAvailabilityResponse.
 */
enum ChangeAvailabilityStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Scheduled = 'Scheduled';
}
