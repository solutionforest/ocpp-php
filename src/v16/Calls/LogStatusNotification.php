<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class LogStatusNotification
{
	public string $status;
	public ?int $requestId = null;
}
