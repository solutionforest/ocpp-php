<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class TriggerMessage
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
