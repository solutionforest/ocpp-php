<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class TriggerMessage extends Call
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
