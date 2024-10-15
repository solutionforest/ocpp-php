<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class DataTransfer extends Call
{
	public string $vendorId;
	public ?string $messageId;
	public ?string $data;
}
