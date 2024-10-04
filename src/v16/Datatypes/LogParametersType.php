<?php

namespace SolutionForest\OcppPhp\v16\Datatypes;

class LogParametersType
{
	public string $remoteLocation;
	public ?string $oldestTimestamp = null;
	public ?string $latestTimestamp = null;
}
