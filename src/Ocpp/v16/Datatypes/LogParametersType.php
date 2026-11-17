<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class LogParametersType extends Datatype
{
	public string $remoteLocation;
	public ?string $oldestTimestamp = null;
	public ?string $latestTimestamp = null;
}
