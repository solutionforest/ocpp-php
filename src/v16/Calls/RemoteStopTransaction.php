<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class RemoteStopTransaction extends Call
{
	public int $transactionId;
}
