<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\TriggerMessageStatus;

class ExtendedTriggerMessage extends CallResult
{
	public string|TriggerMessageStatus $status;
}
