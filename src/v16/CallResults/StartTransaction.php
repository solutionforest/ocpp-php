<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;

class StartTransaction extends CallResult
{
	public array $idTagInfo;
	public int $transactionId;
}
