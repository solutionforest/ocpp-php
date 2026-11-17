<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the APNAuthentication field of a value in SetNetworkProfileRequest.
 */
enum APNAuthentication: string
{
	case PAP = 'PAP';
	case CHAP = 'CHAP';
	case NONE = 'NONE';
	case AUTO = 'AUTO';
}
