<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class MeterValues
{
	public int $connectorId;
	public ?int $transactionId = null;
	public array $meterValue;
}
