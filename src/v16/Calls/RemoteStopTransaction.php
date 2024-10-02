<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class RemoteStopTransaction extends Call
{
	public int $transactionId;
}
