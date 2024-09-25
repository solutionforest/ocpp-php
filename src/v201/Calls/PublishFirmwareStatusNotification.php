<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class PublishFirmwareStatusNotification
{
	public string $status;
	public ?array $location = null;
	public ?int $requestId = null;
}
