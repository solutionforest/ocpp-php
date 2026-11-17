<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingScheduleUpdateType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingProfileStatus;

class PullDynamicScheduleUpdate extends CallResult
{
	/**
	 * Updates to a ChargingSchedulePeriodType for dynamic charging profiles.
	 */
	public ?ChargingScheduleUpdateType $scheduleUpdate = null;

	/**
	 * Result of request.
	 */
	public string|ChargingProfileStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
