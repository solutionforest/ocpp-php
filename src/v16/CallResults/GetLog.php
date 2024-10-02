<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v16\Enums\LogStatus;

class GetLog extends CallResult
{
	public string|LogStatus $status;
	public ?string $filename = null;
}
