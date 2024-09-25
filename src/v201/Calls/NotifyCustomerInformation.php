<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyCustomerInformation
{
	public string $data;
	public ?bool $tbc = null;
	public int $seqNo;
	public string $generatedAt;
	public int $requestId;
}
