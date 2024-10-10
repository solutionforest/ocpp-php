<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\LogStatus;

class GetLog extends CallResult
{
	public string|LogStatus $status;
	public ?string $filename;
}
