<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class MeterValues extends Call
{
	public int $connectorId;
	public ?int $transactionId = null;
	public array $meterValue;
}
