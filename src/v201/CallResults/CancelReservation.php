<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class CancelReservation
{
	public string $status;
	public ?array $statusInfo = null;
}
