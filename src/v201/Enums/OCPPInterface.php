<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the OCPPInterface field of a value in SetNetworkProfileRequest.
 */
enum OCPPInterface: string
{
	case Wired0 = 'Wired0';
	case Wired1 = 'Wired1';
	case Wired2 = 'Wired2';
	case Wired3 = 'Wired3';
	case Wireless0 = 'Wireless0';
	case Wireless1 = 'Wireless1';
	case Wireless2 = 'Wireless2';
	case Wireless3 = 'Wireless3';
}
