<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class TriggerMessage extends Call
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
