<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\TriggerMessageStatus;

class ExtendedTriggerMessage extends CallResult
{
	public string|TriggerMessageStatus $status;
}
