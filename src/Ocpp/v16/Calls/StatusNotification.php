<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargePointErrorCode;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargePointStatus;

class StatusNotification extends Call
{
	public int $connectorId;
	public string|ChargePointErrorCode $errorCode;
	public ?string $info = null;
	public string|ChargePointStatus $status;
	public ?string $timestamp = null;
	public ?string $vendorId = null;
	public ?string $vendorErrorCode = null;
}
