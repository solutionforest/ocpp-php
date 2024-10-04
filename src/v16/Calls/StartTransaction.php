<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class StartTransaction extends Call
{
	public int $connectorId;
	public string $idTag;
	public int $meterStart;
	public ?int $reservationId = null;
	public string $timestamp;
}
