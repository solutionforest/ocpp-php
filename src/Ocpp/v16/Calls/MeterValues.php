<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class MeterValues extends Call
{
	public int $connectorId;
	public ?int $transactionId;
	public array $meterValue;
}
