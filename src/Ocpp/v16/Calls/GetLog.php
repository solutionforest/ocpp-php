<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\LogParametersType;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\Log;

class GetLog extends Call
{
	public LogParametersType $log;
	public string|Log $logType;
	public int $requestId;
	public ?int $retries = null;
	public ?int $retryInterval = null;
}
