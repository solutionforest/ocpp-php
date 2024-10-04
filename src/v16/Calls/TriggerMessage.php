<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class TriggerMessage extends Call
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
