<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the APNAuthentication field of a value in SetNetworkProfileRequest.
 */
enum APNAuthentication: string
{
	case CHAP = 'CHAP';
	case NONE = 'NONE';
	case PAP = 'PAP';
	case AUTO = 'AUTO';
}
