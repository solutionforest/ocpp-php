<?php

namespace SolutionForest\OocpPhp\v201\Calls;

class CancelReservation
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Id of the reservation to cancel.
	 */
	public int $reservationId;
}
