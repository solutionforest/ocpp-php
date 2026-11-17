<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\AvailabilityStatus;

class ChangeAvailability extends CallResult
{
	public string|AvailabilityStatus $status;
}
