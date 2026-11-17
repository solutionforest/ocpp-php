<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\IdTagInfo;

class Authorize extends CallResult
{
	public IdTagInfo $idTagInfo;
}
