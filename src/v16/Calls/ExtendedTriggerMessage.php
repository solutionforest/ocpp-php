<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class ExtendedTriggerMessage
{
	public string|\SolutionForest\OocpPhp\v16\Enums\MessageTrigger $requestedMessage;
	public ?int $connectorId = null;
}
