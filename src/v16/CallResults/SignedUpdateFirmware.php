<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\UpdateFirmwareStatus;

class SignedUpdateFirmware extends CallResult
{
	public string|UpdateFirmwareStatus $status;
}
