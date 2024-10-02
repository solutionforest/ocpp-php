<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class ChangeConfiguration extends Call
{
	public string $key;
	public string $value;
}
