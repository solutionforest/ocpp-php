<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;

class StartTransaction extends CallResult
{
	public array $idTagInfo;
	public int $transactionId;
}
