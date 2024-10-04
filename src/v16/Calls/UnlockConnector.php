<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class UnlockConnector extends Call
{
	public int $connectorId;
}
