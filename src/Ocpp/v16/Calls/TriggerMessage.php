<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\MessageTrigger;

class TriggerMessage extends Call
{
	public string|MessageTrigger $requestedMessage;
	public ?int $connectorId = null;
}
