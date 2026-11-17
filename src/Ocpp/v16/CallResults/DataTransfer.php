<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\DataTransferStatus;

class DataTransfer extends CallResult
{
	public string|DataTransferStatus $status;
	public ?string $data = null;
}
