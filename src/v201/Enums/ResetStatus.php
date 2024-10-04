<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ResetStatus field of a value in ResetResponse.
 */
enum ResetStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Scheduled = 'Scheduled';
}
