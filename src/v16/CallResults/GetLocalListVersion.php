<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class GetLocalListVersion extends CallResult
{
	public int $listVersion;
}
