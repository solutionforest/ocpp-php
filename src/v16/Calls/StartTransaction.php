<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class StartTransaction
{
	public int $connectorId;
	public string $idTag;
	public int $meterStart;
	public ?int $reservationId = null;
	public string $timestamp;
}
