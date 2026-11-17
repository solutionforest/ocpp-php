<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\FirmwareType;

class SignedUpdateFirmware extends Call
{
	public ?int $retries = null;
	public ?int $retryInterval = null;
	public int $requestId;
	public FirmwareType $firmware;
}
