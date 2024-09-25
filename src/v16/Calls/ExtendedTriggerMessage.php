<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ExtendedTriggerMessage
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
