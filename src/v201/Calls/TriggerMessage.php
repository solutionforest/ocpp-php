<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class TriggerMessage
{
	public ?array $evse = null;
	public string $requestedMessage;
}
