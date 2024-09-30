<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class ReserveNow
{
	public int $connectorId;
	public string $expiryDate;
	public string $idTag;
	public ?string $parentIdTag = null;
	public int $reservationId;
}
