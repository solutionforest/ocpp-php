<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class SecurityEventNotification extends Call
{
	public string $type;
	public string $timestamp;
	public ?string $techInfo = null;
}
