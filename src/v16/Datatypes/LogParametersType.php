<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

abstract class LogParametersType
{
	public ?string $remoteLocation = null;
	public ?string $oldestTimestamp = null;
	public ?string $latestTimestamp = null;
}
