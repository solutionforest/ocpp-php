<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class GetDiagnostics extends CallResult
{
	public ?string $fileName;
}
