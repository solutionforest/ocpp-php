<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class ChangeAvailability extends Call
{
	public int $connectorId;
	public string $type;
}
