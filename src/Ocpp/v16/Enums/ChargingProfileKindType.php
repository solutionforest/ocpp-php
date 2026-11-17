<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ChargingProfileKindType field of a value in RemoteStartTransaction , SetChargingProfile.
 */
enum ChargingProfileKindType: string
{
	case Absolute = 'Absolute';
	case Recurring = 'Recurring';
	case Relative = 'Relative';
}
