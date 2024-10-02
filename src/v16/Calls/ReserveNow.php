<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class ReserveNow extends Call
{
	public int $connectorId;
	public string $expiryDate;
	public string $idTag;
	public ?string $parentIdTag = null;
	public int $reservationId;
}
