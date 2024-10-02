<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v16\Enums\TriggerMessageStatus;

class ExtendedTriggerMessage extends CallResult
{
	public string|TriggerMessageStatus $status;
}
