<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class MeterValues
{
	public int $connectorId;
	public ?int $transactionId = null;
	public array $meterValue;
}
