<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class GetConfiguration extends CallResult
{
	public ?array $configurationKey;
	public ?array $unknownKey;
}
