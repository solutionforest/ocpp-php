<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class StartTransaction
{
	public int $connectorId;
	public string $idTag;
	public int $meterStart;
	public ?int $reservationId = null;
	public string $timestamp;
}
