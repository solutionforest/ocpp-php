<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class MeterValues extends Call
{
	public int $connectorId;
	public ?int $transactionId = null;
	public array $meterValue;
}
