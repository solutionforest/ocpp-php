<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the VPN field of a value in SetNetworkProfileRequest.
 */
enum VPN: string
{
	case IKEv2 = 'IKEv2';
	case IPSec = 'IPSec';
	case L2TP = 'L2TP';
	case PPTP = 'PPTP';
}
