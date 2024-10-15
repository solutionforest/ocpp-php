<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

class LogParametersType
{
	public string $remoteLocation;
	public ?string $oldestTimestamp = null;
	public ?string $latestTimestamp = null;
}
