<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class ChangeConfiguration extends Call
{
	public string $key;
	public string $value;
}
