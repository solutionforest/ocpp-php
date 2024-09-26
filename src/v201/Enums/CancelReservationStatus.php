<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the CancelReservationStatus field of a value in CancelReservationResponse.
 */
enum CancelReservationStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
