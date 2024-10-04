<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ChargingState field of a value in TransactionEventRequest.
 */
enum ChargingState: string
{
	case Charging = 'Charging';
	case EVConnected = 'EVConnected';
	case SuspendedEV = 'SuspendedEV';
	case SuspendedEVSE = 'SuspendedEVSE';
	case Idle = 'Idle';
}
