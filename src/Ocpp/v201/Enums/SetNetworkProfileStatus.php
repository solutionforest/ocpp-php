<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the SetNetworkProfileStatus field of a value in SetNetworkProfileResponse.
 */
enum SetNetworkProfileStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Failed = 'Failed';
}
