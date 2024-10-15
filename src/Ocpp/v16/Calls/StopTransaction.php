<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class StopTransaction extends Call
{
	public ?string $idTag;
	public int $meterStop;
	public string $timestamp;
	public int $transactionId;
	public ?string $reason;
	public ?array $transactionData;
}
