<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ReserveNow
{
	public int $connectorId;
	public string $expiryDate;
	public string $idTag;
	public ?string $parentIdTag = null;
	public int $reservationId;
}
