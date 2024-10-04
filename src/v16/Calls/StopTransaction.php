<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class StopTransaction extends Call
{
	public ?string $idTag = null;
	public int $meterStop;
	public string $timestamp;
	public int $transactionId;
	public ?string $reason = null;
	public ?array $transactionData = null;
}
