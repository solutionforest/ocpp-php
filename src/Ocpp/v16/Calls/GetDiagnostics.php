<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class GetDiagnostics extends Call
{
	public string $location;
	public ?int $retries;
	public ?int $retryInterval;
	public ?string $startTime;
	public ?string $stopTime;
}
