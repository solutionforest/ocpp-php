<?php

namespace SolutionForest\OocpPhp\v201\Calls;

class ReservationStatusUpdate
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
	public string|\SolutionForest\OocpPhp\v201\Enums\ReservationUpdateStatus $reservationUpdateStatus;
}
