<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the Location field of a value in MeterValues , StopTransaction.
 */
enum Location: string
{
	case Cable = 'Cable';
	case EV = 'EV';
	case Inlet = 'Inlet';
	case Outlet = 'Outlet';
	case Body = 'Body';
}
