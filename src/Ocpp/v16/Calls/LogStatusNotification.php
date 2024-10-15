<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\UploadLogStatus;

class LogStatusNotification extends Call
{
	public string|UploadLogStatus $status;
	public ?int $requestId;
}
