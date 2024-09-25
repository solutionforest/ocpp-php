<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class BootNotification
{
	public string $currentTime;
	public int $interval;
	public string $status;
	public ?array $statusInfo = null;
}
