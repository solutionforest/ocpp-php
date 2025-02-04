<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\RegistrationStatus;

class BootNotification extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This contains the CSMS’s current time.
	 */
	public string $currentTime;

	/**
	 * When <<cmn_registrationstatusenumtype,Status>> is Accepted, this contains the heartbeat interval in seconds. If the CSMS returns something other than Accepted, the value of the interval field indicates the minimum wait time before sending a next BootNotification request.
	 */
	public int $interval;

	/**
	 * This contains whether the Charging Station has been registered
	 * within the CSMS.
	 */
	public string|RegistrationStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
