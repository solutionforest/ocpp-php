<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SecurityEventNotification extends Call
{
	public string $type;
	public string $timestamp;
	public ?string $techInfo = null;
}
