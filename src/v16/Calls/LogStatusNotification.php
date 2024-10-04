<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\UploadLogStatus;

class LogStatusNotification extends Call
{
	public string|UploadLogStatus $status;
	public ?int $requestId = null;
}
