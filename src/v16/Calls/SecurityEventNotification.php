<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class SecurityEventNotification
{
	public string $type;
	public string $timestamp;
	public ?string $techInfo = null;
}
