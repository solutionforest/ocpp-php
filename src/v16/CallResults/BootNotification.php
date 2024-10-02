<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;

class BootNotification extends CallResult
{
	public string $status;
	public string $currentTime;
	public int $interval;
}
