<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\LogStatus;

class GetLog extends CallResult
{
	public string|LogStatus $status;
	public ?string $filename;
}
