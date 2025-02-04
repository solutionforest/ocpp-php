<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the CancelReservationStatus field of a value in CancelReservationResponse.
 */
enum CancelReservationStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
