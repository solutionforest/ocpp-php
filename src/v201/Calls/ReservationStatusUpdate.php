<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v201\Enums\ReservationUpdateStatus;

class ReservationStatusUpdate extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The ID of the reservation.
	 */
	public int $reservationId;

	/**
	 * The updated reservation status.
	 */
	public string|ReservationUpdateStatus $reservationUpdateStatus;
}
