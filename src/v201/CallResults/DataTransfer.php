<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class DataTransfer
{
	public string $status;
	public ?array $statusInfo = null;
	public mixed $data = null;
}
