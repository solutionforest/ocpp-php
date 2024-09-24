<?php

namespace SolutionForest\OcppPhp\CallResults;

abstract class BootNotification
{
	public string $status;
	public string $currentTime;
	public int $interval;
}
