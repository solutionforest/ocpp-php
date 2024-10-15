<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class DataTransfer extends CallResult
{
	public string $status;
	public ?string $data;
}
