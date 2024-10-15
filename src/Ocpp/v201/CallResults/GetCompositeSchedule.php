<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GenericStatus;

class GetCompositeSchedule extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The Charging Station will indicate if it was
	 * able to process the request
	 */
	public string|GenericStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;

	/**
	 * Composite_ Schedule
	 * urn:x-oca:ocpp:uid:2:233362
	 */
	public ?object $schedule;
}
