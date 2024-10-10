<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class GetDiagnostics extends Call
{
	public string $location;
	public ?int $retries;
	public ?int $retryInterval;
	public ?string $startTime;
	public ?string $stopTime;
}
