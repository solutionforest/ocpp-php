<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v201\Enums\ReservationUpdateStatus;

class ReservationStatusUpdate extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The ID of the reservation.
	 */
	public int $reservationId;

	/**
	 * The updated reservation status.
	 */
	public string|ReservationUpdateStatus $reservationUpdateStatus;
}
