<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ChangeConfiguration extends Call
{
	public string $key;
	public string $value;
}
