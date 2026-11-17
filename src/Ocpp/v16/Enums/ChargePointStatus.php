<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ChargePointStatus field of a value in StatusNotification.
 */
enum ChargePointStatus: string
{
	case Available = 'Available';
	case Preparing = 'Preparing';
	case Charging = 'Charging';
	case SuspendedEVSE = 'SuspendedEVSE';
	case SuspendedEV = 'SuspendedEV';
	case Finishing = 'Finishing';
	case Reserved = 'Reserved';
	case Unavailable = 'Unavailable';
	case Faulted = 'Faulted';
}
