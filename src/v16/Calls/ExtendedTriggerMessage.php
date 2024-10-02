<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v16\Enums\MessageTrigger;

class ExtendedTriggerMessage extends Call
{
	public string|MessageTrigger $requestedMessage;
	public ?int $connectorId = null;
}
