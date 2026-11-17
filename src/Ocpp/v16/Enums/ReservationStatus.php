<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ReservationStatus field of a value in ReserveNowResponse.
 */
enum ReservationStatus: string
{
	case Accepted = 'Accepted';
	case Faulted = 'Faulted';
	case Occupied = 'Occupied';
	case Rejected = 'Rejected';
	case Unavailable = 'Unavailable';
}
