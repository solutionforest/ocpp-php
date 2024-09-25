<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the OCPPTransport field of a value in SetNetworkProfileRequest.
 */
enum OCPPTransport: string
{
	case JSON = 'JSON';
	case SOAP = 'SOAP';
}
