<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class StartTransaction extends Call
{
	public int $connectorId;
	public string $idTag;
	public int $meterStart;
	public ?int $reservationId = null;
	public string $timestamp;
}
