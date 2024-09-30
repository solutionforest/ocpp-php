<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class LogStatusNotification
{
	public string|\SolutionForest\OocpPhp\v16\Enums\UploadLogStatus $status;
	public ?int $requestId = null;
}
