<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class StatusNotification extends Call
{
	public int $connectorId;
	public string $errorCode;
	public ?string $info;
	public string $status;
	public ?string $timestamp;
	public ?string $vendorId;
	public ?string $vendorErrorCode;
}
