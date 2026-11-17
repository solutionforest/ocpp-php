<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ChargingRateUnitType field of a value in GetCompositeSchedule , GetCompositeScheduleResponse , RemoteStartTransaction , SetChargingProfile.
 */
enum ChargingRateUnitType: string
{
	case A = 'A';
	case W = 'W';
}
