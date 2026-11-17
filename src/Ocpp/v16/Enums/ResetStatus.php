<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ResetStatus field of a value in ResetResponse.
 */
enum ResetStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
