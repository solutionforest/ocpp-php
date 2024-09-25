<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SecurityEventNotification
{
	public string $type;
	public string $timestamp;
	public ?string $techInfo = null;
}
