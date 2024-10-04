<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class StopTransaction extends CallResult
{
	public ?array $idTagInfo = null;
}
