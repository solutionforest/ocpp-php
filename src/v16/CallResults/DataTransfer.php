<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class DataTransfer extends CallResult
{
	public string $status;
	public ?string $data = null;
}
