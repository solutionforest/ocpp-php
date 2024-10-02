<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v16\Enums\UpdateFirmwareStatus;

class SignedUpdateFirmware extends CallResult
{
	public string|UpdateFirmwareStatus $status;
}
