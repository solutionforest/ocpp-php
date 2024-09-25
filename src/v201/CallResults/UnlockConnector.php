<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class UnlockConnector
{
	public string $status;
	public ?array $statusInfo = null;
}
