<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ReserveNow extends Call
{
	public int $connectorId;
	public string $expiryDate;
	public string $idTag;
	public ?string $parentIdTag;
	public int $reservationId;
}
