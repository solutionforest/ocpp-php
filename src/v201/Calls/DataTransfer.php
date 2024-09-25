<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class DataTransfer
{
	public ?string $messageId = null;
	public mixed $data = null;
	public string $vendorId;
}
