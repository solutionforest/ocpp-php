<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class GetConfiguration extends CallResult
{
	public ?array $configurationKey;
	public ?array $unknownKey;
}
