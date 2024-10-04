<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class BootNotification extends CallResult
{
	public string $status;
	public string $currentTime;
	public int $interval;
}
