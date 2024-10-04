<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ChangeAvailability extends Call
{
	public int $connectorId;
	public string $type;
}
