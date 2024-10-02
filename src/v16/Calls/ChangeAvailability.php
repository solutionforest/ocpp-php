<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class ChangeAvailability extends Call
{
	public int $connectorId;
	public string $type;
}
