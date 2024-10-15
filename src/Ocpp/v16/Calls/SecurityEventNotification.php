<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SecurityEventNotification extends Call
{
	public string $type;
	public string $timestamp;
	public ?string $techInfo;
}
