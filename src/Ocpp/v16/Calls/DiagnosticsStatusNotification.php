<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\DiagnosticsStatus;

class DiagnosticsStatusNotification extends Call
{
	public string|DiagnosticsStatus $status;
}
