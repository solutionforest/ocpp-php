<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\IdTagInfo;

class StopTransaction extends CallResult
{
	public ?IdTagInfo $idTagInfo = null;
}
