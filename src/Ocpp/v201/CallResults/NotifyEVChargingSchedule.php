<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GenericStatus;

class NotifyEVChargingSchedule extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Returns whether the CSMS has been able to process the message successfully. It does not imply any approval of the charging schedule.
	 */
	public string|GenericStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
