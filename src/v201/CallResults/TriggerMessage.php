<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class TriggerMessage
{
	public string $status;
	public ?array $statusInfo = null;
}
