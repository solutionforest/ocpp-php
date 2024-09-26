<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class DataTransfer
{
	public string $vendorId;
	public ?string $messageId = null;
	public ?string $data = null;
}
