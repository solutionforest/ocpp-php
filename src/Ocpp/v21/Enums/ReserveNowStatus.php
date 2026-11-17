<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ReserveNowStatus field of a value in ReserveNowResponse.
 */
enum ReserveNowStatus: string
{
	case Accepted = 'Accepted';
	case Faulted = 'Faulted';
	case Occupied = 'Occupied';
	case Rejected = 'Rejected';
	case Unavailable = 'Unavailable';
}
