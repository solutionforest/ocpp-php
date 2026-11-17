<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\MeterValue;

class MeterValues extends Call
{
	public int $connectorId;
	public ?int $transactionId = null;

	/** @var list<MeterValue> */
	#[ListOf(MeterValue::class)]
	public array $meterValue;
}
