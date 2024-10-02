<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v16\Enums\UploadLogStatus;

class LogStatusNotification extends Call
{
	public string|UploadLogStatus $status;
	public ?int $requestId = null;
}
