<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class Heartbeat extends CallResult
{
	public string $currentTime;
}
