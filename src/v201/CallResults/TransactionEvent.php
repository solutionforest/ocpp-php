<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class TransactionEvent
{
	public ?int $totalCost = null;
	public ?int $chargingPriority = null;
	public ?array $idTokenInfo = null;
	public ?array $updatedPersonalMessage = null;
}
