<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the BatterySwapEvent field of a value in BatterySwapRequest.
 */
enum BatterySwapEvent: string
{
	case BatteryIn = 'BatteryIn';
	case BatteryOut = 'BatteryOut';
	case BatteryOutTimeout = 'BatteryOutTimeout';
}
