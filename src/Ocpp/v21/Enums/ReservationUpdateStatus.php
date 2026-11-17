<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the ReservationUpdateStatus field of a value in ReservationStatusUpdateRequest.
 */
enum ReservationUpdateStatus: string
{
	case Expired = 'Expired';
	case Removed = 'Removed';
	case NoTransaction = 'NoTransaction';
}
