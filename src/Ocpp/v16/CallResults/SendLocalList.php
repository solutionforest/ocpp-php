<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\UpdateStatus;

class SendLocalList extends CallResult
{
	public string|UpdateStatus $status;
}
