<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the GetCompositeScheduleStatus field of a value in GetCompositeScheduleResponse.
 */
enum GetCompositeScheduleStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
