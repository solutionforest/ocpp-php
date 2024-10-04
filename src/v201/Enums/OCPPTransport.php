<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the OCPPTransport field of a value in SetNetworkProfileRequest.
 */
enum OCPPTransport: string
{
	case JSON = 'JSON';
	case SOAP = 'SOAP';
}
