<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;

class DataTransfer extends CallResult
{
	public string $status;
	public ?string $data = null;
}
