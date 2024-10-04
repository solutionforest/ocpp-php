<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the Location field of a value in MeterValuesRequest , TransactionEventRequest.
 */
enum Location: string
{
	case Body = 'Body';
	case Cable = 'Cable';
	case EV = 'EV';
	case Inlet = 'Inlet';
	case Outlet = 'Outlet';
}
