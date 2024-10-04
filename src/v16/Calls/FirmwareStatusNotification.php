<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class FirmwareStatusNotification extends Call
{
	public string $status;
}
