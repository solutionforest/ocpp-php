<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class StartTransaction extends CallResult
{
	public object $idTagInfo;
	public int $transactionId;
}
