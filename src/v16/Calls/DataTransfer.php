<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class DataTransfer
{
	public string $vendorId;
	public ?string $messageId = null;
	public ?string $data = null;
}
