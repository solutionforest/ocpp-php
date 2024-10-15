<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class ChangeAvailability extends Call
{
	public int $connectorId;
	public string $type;
}
