<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\UploadLogStatus;

class LogStatusNotification extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This contains the status of the log upload.
	 */
	public string|UploadLogStatus $status;

	/**
	 * The request id that was provided in GetLogRequest that started this log upload. This field is mandatory,
	 * unless the message was triggered by a TriggerMessageRequest AND there is no log upload ongoing.
	 */
	public ?int $requestId;
}
