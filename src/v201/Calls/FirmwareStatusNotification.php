<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class FirmwareStatusNotification
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the progress status of the firmware installation.
	 */
	public string $status;

	/**
	 * The request id that was provided in the
	 * UpdateFirmwareRequest that started this firmware update.
	 * This field is mandatory, unless the message was triggered by a TriggerMessageRequest AND there is no firmware update ongoing.
	 */
	public ?int $requestId = null;
}
