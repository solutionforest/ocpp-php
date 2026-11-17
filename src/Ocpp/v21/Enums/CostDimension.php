<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the CostDimension field of a value in TransactionEventRequest.
 */
enum CostDimension: string
{
	case Energy = 'Energy';
	case MaxCurrent = 'MaxCurrent';
	case MinCurrent = 'MinCurrent';
	case MaxPower = 'MaxPower';
	case MinPower = 'MinPower';
	case IdleTIme = 'IdleTIme';
	case ChargingTime = 'ChargingTime';
}
