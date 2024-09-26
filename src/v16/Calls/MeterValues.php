<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class MeterValues
{
	public int $connectorId;
	public ?int $transactionId = null;
	public array $meterValue;
}
