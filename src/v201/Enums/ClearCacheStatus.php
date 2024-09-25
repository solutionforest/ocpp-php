<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ClearCacheStatus field of a value in ClearCacheResponse.
 */
enum ClearCacheStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
