<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\MessageTrigger;

class ExtendedTriggerMessage extends Call
{
	public string|MessageTrigger $requestedMessage;
	public ?int $connectorId;
}
