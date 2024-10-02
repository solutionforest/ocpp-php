<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;

class BootNotification extends CallResult
{
	public string $status;
	public string $currentTime;
	public int $interval;
}
