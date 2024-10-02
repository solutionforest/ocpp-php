<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class StatusNotification extends Call
{
	public int $connectorId;
	public string $errorCode;
	public ?string $info = null;
	public string $status;
	public ?string $timestamp = null;
	public ?string $vendorId = null;
	public ?string $vendorErrorCode = null;
}
