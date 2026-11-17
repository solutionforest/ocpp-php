<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the DERControlStatus field of a value in ClearDERControlResponse , GetDERControlResponse , SetDERControlResponse.
 */
enum DERControlStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotSupported = 'NotSupported';
	case NotFound = 'NotFound';
}
