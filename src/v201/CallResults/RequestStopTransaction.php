<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class RequestStopTransaction
{
	public string $status;
	public ?array $statusInfo = null;
}
