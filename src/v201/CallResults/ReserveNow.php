<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\ReserveNowStatus;

class ReserveNow extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates the success or failure of the reservation.
	 */
	public string|ReserveNowStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
