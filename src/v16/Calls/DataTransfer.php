<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class DataTransfer extends Call
{
	public string $vendorId;
	public ?string $messageId = null;
	public ?string $data = null;
}
