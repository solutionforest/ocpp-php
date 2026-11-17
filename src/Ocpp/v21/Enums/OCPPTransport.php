<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the OCPPTransport field of a value in SetNetworkProfileRequest.
 */
enum OCPPTransport: string
{
	case SOAP = 'SOAP';
	case JSON = 'JSON';
}
