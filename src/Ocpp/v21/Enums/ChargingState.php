<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ChargingState field of a value in TransactionEventRequest.
 */
enum ChargingState: string
{
	case EVConnected = 'EVConnected';
	case Charging = 'Charging';
	case SuspendedEV = 'SuspendedEV';
	case SuspendedEVSE = 'SuspendedEVSE';
	case Idle = 'Idle';
}
