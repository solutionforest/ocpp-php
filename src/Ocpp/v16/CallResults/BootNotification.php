<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class BootNotification extends CallResult
{
	public string $status;
	public string $currentTime;
	public int $interval;
}
