<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class RemoteStopTransaction extends Call
{
	public int $transactionId;
}
