<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class LogStatusNotification
{
	public string|\SolutionForest\OocpPhp\v16\Enums\UploadLogStatus $status;
	public ?int $requestId = null;
}
