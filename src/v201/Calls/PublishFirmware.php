<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class PublishFirmware
{
	public string $location;
	public ?int $retries = null;
	public string $checksum;
	public int $requestId;
	public ?int $retryInterval = null;
}
