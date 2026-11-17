<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MobilityNeedsMode field of a value in NotifyEVChargingNeedsRequest.
 */
enum MobilityNeedsMode: string
{
	case EVCC = 'EVCC';
	case EVCCSECC = 'EVCC_SECC';
}
