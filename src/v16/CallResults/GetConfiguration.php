<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;

class GetConfiguration extends CallResult
{
	public ?array $configurationKey = null;
	public ?array $unknownKey = null;
}
