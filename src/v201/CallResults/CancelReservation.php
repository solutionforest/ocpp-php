<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class CancelReservation
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates the success or failure of the canceling of a reservation by CSMS.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\CancelReservationStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
