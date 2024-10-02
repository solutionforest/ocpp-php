<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v201\Enums\PublishFirmwareStatus;

class PublishFirmwareStatusNotification extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the progress status of the publishfirmware
	 * installation.
	 */
	public string|PublishFirmwareStatus $status;

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
