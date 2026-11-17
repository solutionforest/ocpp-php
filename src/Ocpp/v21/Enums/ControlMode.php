<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ControlMode field of a value in NotifyEVChargingNeedsRequest.
 */
enum ControlMode: string
{
	case ScheduledControl = 'ScheduledControl';
	case DynamicControl = 'DynamicControl';
}
