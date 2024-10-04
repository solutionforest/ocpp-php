<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class GetDiagnostics extends Call
{
	public string $location;
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public ?string $startTime = null;
	public ?string $stopTime = null;
}
