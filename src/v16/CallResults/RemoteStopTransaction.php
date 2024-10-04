<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class RemoteStopTransaction extends CallResult
{
	public string $status;
}
