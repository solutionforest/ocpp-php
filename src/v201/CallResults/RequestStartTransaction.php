<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class RequestStartTransaction
{
	public string $status;
	public ?array $statusInfo = null;
	public ?string $transactionId = null;
}
