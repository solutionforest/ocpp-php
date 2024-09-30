<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class GetCompositeSchedule
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The Charging Station will indicate if it was
	 * able to process the request
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\GenericStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * Composite_ Schedule
	 * urn:x-oca:ocpp:uid:2:233362
	 */
	public ?array $schedule = null;
}
