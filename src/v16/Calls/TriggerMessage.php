<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class TriggerMessage
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
