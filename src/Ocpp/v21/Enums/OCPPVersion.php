<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the OCPPVersion field of a value in SetNetworkProfileRequest.
 */
enum OCPPVersion: string
{
	case OCPP12 = 'OCPP12';
	case OCPP15 = 'OCPP15';
	case OCPP16 = 'OCPP16';
	case OCPP20 = 'OCPP20';
	case OCPP201 = 'OCPP201';
	case OCPP21 = 'OCPP21';
}
