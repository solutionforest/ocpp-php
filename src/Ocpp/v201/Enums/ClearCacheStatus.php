<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the ClearCacheStatus field of a value in ClearCacheResponse.
 */
enum ClearCacheStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
