<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class TriggerMessage extends Call
{
	public string $requestedMessage;
	public ?int $connectorId;
}
