<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ChargingProfileStatus field of a value in PullDynamicScheduleUpdateResponse , SetChargingProfileResponse , UpdateDynamicScheduleResponse.
 */
enum ChargingProfileStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
