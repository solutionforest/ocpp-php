<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class ExtendedTriggerMessage
{
	public string|\SolutionForest\OocpPhp\v16\Enums\MessageTrigger $requestedMessage;
	public ?int $connectorId = null;
}
