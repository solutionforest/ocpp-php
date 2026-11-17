<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ResetStatus field of a value in ResetResponse.
 */
enum ResetStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Scheduled = 'Scheduled';
}
