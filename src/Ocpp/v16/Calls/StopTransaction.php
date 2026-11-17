<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\MeterValue;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\Reason;

class StopTransaction extends Call
{
	public ?string $idTag = null;
	public int $meterStop;
	public string $timestamp;
	public int $transactionId;
	public null|string|Reason $reason = null;

	/** @var list<MeterValue>|null */
	#[ListOf(MeterValue::class)]
	public ?array $transactionData = null;
}
