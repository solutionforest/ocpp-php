<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class StartTransaction extends Call
{
	public int $connectorId;
	public string $idTag;
	public int $meterStart;
	public ?int $reservationId;
	public string $timestamp;
}
