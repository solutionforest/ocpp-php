<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ReservationUpdateStatus field of a value in ReservationStatusUpdateRequest.
 */
enum ReservationUpdateStatus: string
{
	case Expired = 'Expired';
	case Removed = 'Removed';
}
