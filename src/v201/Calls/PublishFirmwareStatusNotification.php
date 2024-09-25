<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class PublishFirmwareStatusNotification
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the progress status of the publishfirmware
	 * installation.
	 */
	public string $status;

	/**
	 * Required if status is Published. Can be multiple URI’s, if the Local Controller supports e.g. HTTP, HTTPS, and FTP.
	 */
	public ?array $location = null;

	/**
	 * The request id that was
	 * provided in the
	 * PublishFirmwareRequest which
	 * triggered this action.
	 */
	public ?int $requestId = null;
}
