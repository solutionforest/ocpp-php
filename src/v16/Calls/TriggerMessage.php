<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class TriggerMessage
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
