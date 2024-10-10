<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class DataTransfer extends Call
{
	public string $vendorId;
	public ?string $messageId;
	public ?string $data;
}
