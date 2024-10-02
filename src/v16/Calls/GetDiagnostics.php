<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class GetDiagnostics extends Call
{
	public string $location;
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public ?string $startTime = null;
	public ?string $stopTime = null;
}
