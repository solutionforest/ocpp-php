<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class ReserveNow
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates the success or failure of the reservation.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\ReserveNowStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
